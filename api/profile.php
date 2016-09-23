<?php
	session_start();
	
	if(isset($_SESSION['S4S']['user']))
	{
		$user_data = json_decode($_POST['data'], TRUE);
		
		print_r($user_data);
		
		
		
	}
	else
	{
		http_response_code(401);
		exit;
	}	
	?>