<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="o">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Search | Scholars 4 Scholars</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gsdk.css" rel="stylesheet"/>
    <link href="assets/css/examples.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>  
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/login-register.css" rel="stylesheet" />
    
</head>

<body class="home">

<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="images/Scholars-4-Scholars-Logo@2x.png" height="30"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul  class="nav navbar-nav navbar-right">
            <li><a href="#" class="btn btn-round btn-default" onclick="openLoginModal();"><i class="fa fa-sign-in"></i> Login</a></li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
        </div>    
        <div class="small-info">
            <h1>Scholars 4 Scholars - Search</h1>
            <h3 class="subtitle">Searching for scholarships has never been so easy and personalized. Start searching now!</h3> 
            <br />   
	            <div class="row">
		            <div class="col-md-8 col-md-offset-4">
			            <div class="col-md-3">
							<button href="#fakelink" class="btn btn-block btn-lg btn-info" onclick="openRegisterModal();"><i class="fa fa-external-link"></i>  Register</button>
			            </div>
			            <div class="col-md-3">
							<button href="#fakelink" class="btn btn-block btn-lg btn-warning" onclick="openLoginModal();"><i class="fa fa-sign-in"></i>  Login</button>
			            </div>
		            </div>
        </div>
    </div>
    
    

    
    
</div> <!-- wrapper --> 
    <div class="modal fade login" id="loginModal" aria-hidden="true" style="display: none;">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Register with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox" style="display: none;">
                                    <form method="post" action="/auth/login" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="">
                             <div class="form">
                                <form method="post" html="{:multipart=&gt;true}" data-remote="true" action="/auth/register" accept-charset="UTF-8" onsubmit="validateForm()">
                                <input id="reg_email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="reg_password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="reg_password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer" style="display: none;">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		  </div>
</body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	
	<!--  Plugins -->
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-morphing.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/bootstrap-select.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/jquery.tagsinput.js"></script>
	
	<!-- GSDK Pro functions -->
	<script src="assets/js/get-shit-done.js"></script>
	<script src="assets/js/login-register.js"></script>
    
</html>


