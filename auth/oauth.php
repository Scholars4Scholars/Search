<?php
	require_once '../db.php';
	session_start();
	require_once 'vendor/autoload.php';

	use OAuth_io\OAuth;
	
	$_SESSION['S4S'] = array();
	$session = $_SESSION['S4S'];
	
	$oauth = new OAuth($session);
	$oauth->initialize('_EogkrJQZ9qSXSJNfDmkIKxCQVI', 'SA-849gnavD6TQ_RRNjMpAPQero');
	try {
    $request_object = $oauth->auth('facebook', array(
        'code' => $_POST['code']
    ));
    }
    catch (Exception $e) {
	    echo $e;
		http_response_code(500);
		exit;
	}
    
    $credentials = $request_object->getCredentials();
    
    if (!isset($credentials['access_token']) && !isset($credentials['oauth_token'])) {
        http_response_code(400);
        exit;          
    }

	$me = $request_object->get('/me');
	
	$user_email = $me['email'];
	
	$result = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE email='$user_email'"));
	$internal_id = uniqid('s4s.');
	if ($result)
	{
		$_SESSION['S4S']['user']['s4s_id'] = $result['s4s_id'];
		
		if ($result['has_profile'])
		{
			$redirect = array("url" => "https://beta.scholars4scholars.org/search/home.php");
		}
		else
		{
			$redirect = array("url" => "https://beta.scholars4scholars.org/search/welcome.php");
		}
	}
	else
	{
		$query = "INSERT INTO users (s4s_id, email, has_profile, fb_id, first_name, last_name) VALUES ('$internal_id', '$me[email]', '0', '$me[id]', '$me[first_name]', '$me[last_name]')";
		$result = mysql_query($query);
		
		if ($result)
		{
			$_SESSION['S4S']['user']['s4s_id'] = $internal_id;
			$redirect = array("url" => "https://beta.scholars4scholars.org/search/welcome.php");
		}
		else
		{
			$redirect = array("error" => true);
		}
	}
	
	$_SESSION['S4S']['user']['first_name'] = $me['first_name'];
	$_SESSION['S4S']['user']['last_name'] = $me['last_name'];
	$_SESSION['S4S']['user']['fb'] = $me;
	
	header('Content-Type: application/json');
	echo json_encode($redirect);
	
	
?>