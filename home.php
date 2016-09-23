<?php
	$user_alive = false;
	session_start();
	
	if (isset($_SESSION['S4S']['user']['s4s_id']))
	{
		$user_alive = true;
	}
	else
	{
		header("Location: index.php");
		exit;
	}

	?>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>  
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />

    
</head>

<body class="home">
	<nav class="navbar navbar-custom navbar-icons navbar-fixed-top" role="navigation">
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
	    <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
           
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="pe-7s-study"></i>
                        <p>
                            Scholarships
                            <b class="caret"></b>
                        </p>
                  </a>
                  <ul class="dropdown-menu dropdown-with-icons">
                    <li><a href="#"><i class="pe-7s-search"></i> Search</a></li>
                    <li><a href="#"><i class="pe-7s-bookmarks"></i> Saved</a></li>
                    <li><a href="#"><i class="pe-7s-check"></i> Complete</a></li>
                  </ul>
            </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="pe-7s-user"></i>
                        <p>
                            <?=$_SESSION['S4S']['user']['first_name'];?>
                            <b class="caret"></b>
                        </p>
                  </a>
                  <ul class="dropdown-menu dropdown-with-icons">
                    <li><a href="#"><i class="pe-7s-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="pe-7s-tools"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout.php" class="text-danger"><i class="pe-7s-close-circle"></i> Log out</a></li>
                  </ul>
            </li>
       </ul>
    </div>
	
	  </div>
	</nav>
	
	    <div class="parallax filter-black">          
	        <div class="small-info">
	            <h1>Scholarship Search</h1>
	        </div>
	        <div class="right-side">
	        	<h1>Stats on your scholarships:</h1>
	        </div>
	    
    </div>
<div class="section">
	<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-md-12">
		
    
	   </div> <!--12end-->  
		<div class="col-md-12">
			<div class="col-md-2">
                <div class="card card-refine">
                    <div class="header">
                        <h4 class="title">Refine
                            <button class="btn btn-default btn-xs btn pull-right btn-simple" rel="tooltip" title="" data-original-title="Reset Filter">
                                <i class="fa fa-refresh"></i>
                            </button>
                         </h4>
                    </div>
                    <div class="content">      
                          <div class="panel-group" id="accordion">
          
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                <a data-toggle="collapse" href="#refinePrice">
                                  Price Range
                                  <i class="fa fa-caret-up pull-right"></i>
                                </a>
                              </h6>
                            </div>
                            <div id="refinePrice" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <span class="price price-left">€ 100</span>
                                 <span class="price price-right">€ 850</span>
                                 <div class="clearfix"></div>
                                 <div id="refine-price-range" class="slider slider-info ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10.01001001001%; width: 75.0750750750751%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 10.01001001001%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 85.0850850850851%;"></a></div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                <a data-toggle="collapse" href="#refineClothing" class="collapsed">
                                  Clothing
                                  <i class="fa fa-caret-up pull-right"></i>
                                </a>
                              </h6>
                            </div>
                            <div id="refineClothing" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <label class="checkbox checked">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                    Blazers
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Casual Shirts
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Formal Shirts
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Jeans
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Polos
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Pyjamas
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Shorts
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Trousers
                                  </label>
                              </div>
                            </div>
                          </div>
                          
                           
                           <div class="panel panel-default">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                <a data-toggle="collapse" href="#refineDesigner">
                                  Designer
                                  <i class="fa fa-caret-up pull-right"></i>
                                </a>
                              </h6>
                            </div>
                            <div id="refineDesigner" class="panel-collapse collapse in">
                              <div class="panel-body panel-scroll">
                                 <label class="checkbox checked">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                    All
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Acne Studio
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Alex Mill
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Alexander McQueen
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Alfred Dunhill
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    AMI
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Berena
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Berluti
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Burberry Prorsum
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Calvin Klein
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Canali
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Club Monaco
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Dolce &amp; Gabbana
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Gucci
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Kolor
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Lanvin
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Loro Piana
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Massimo Alba
                                  </label>
                              </div>
                            </div>
                          </div><!-- end panel -->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                <a data-toggle="collapse" href="refineColour" class="collapsed">
                                  Colour
                                  <i class="fa fa-caret-up pull-right"></i>
                                </a>
                              </h6>
                            </div>
                            <div id="refineColour" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <label class="checkbox checked">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                    All
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Black
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Blue
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Brown
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Gray
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Green
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Neutrals
                                  </label>
                                  <label class="checkbox">
                                    <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                    Purple
                                  </label>
                              </div>
                            </div>
                          </div> <!-- end panel -->
                          
                        </div>  
                    </div>
                </div> <!-- end card -->
            </div><!--end left side bar -->
			<div class="col-md-10">
				<div class="col-md-3">
                        <div class="card card-product">
                            <div class="image">
                                <a href="#">
                                    <img src="../assets/img/card-product-1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Burberry Prorsum</h4>
                                </a> 
                                <p class="description">
                                   Printed Fine Cotton-Jersey T-Shirt with floral pattern
                                </p>
                                <div class="footer">
                                    <span class="price"> € 250</span>
                                    <button class="btn btn-danger btn-simple pull-right ">
                                        <i class="fa fa-heart"></i> Wishlisted
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-3">
                        <div class="card card-product">
                            <div class="image">
                                <a href="#">
                                    <img src="../assets/img/card-product-1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Burberry Prorsum</h4>
                                </a> 
                                <p class="description">
                                   Printed Fine Cotton-Jersey T-Shirt with floral pattern
                                </p>
                                <div class="footer">
                                    <span class="price"> € 250</span>
                                    <button class="btn btn-danger btn-simple pull-right ">
                                        <i class="fa fa-heart"></i> Wishlisted
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-3">
                        <div class="card card-product">
                            <div class="image">
                                <a href="#">
                                    <img src="../assets/img/card-product-1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Burberry Prorsum</h4>
                                </a> 
                                <p class="description">
                                   Printed Fine Cotton-Jersey T-Shirt with floral pattern
                                </p>
                                <div class="footer">
                                    <span class="price"> € 250</span>
                                    <button class="btn btn-danger btn-simple pull-right ">
                                        <i class="fa fa-heart"></i> Wishlisted
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-3">
                        <div class="card card-product">
                            <div class="image">
                                <a href="#">
                                    <img src="../assets/img/card-product-1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Burberry Prorsum</h4>
                                </a> 
                                <p class="description">
                                   Printed Fine Cotton-Jersey T-Shirt with floral pattern
                                </p>
                                <div class="footer">
                                    <span class="price"> € 250</span>
                                    <button class="btn btn-danger btn-simple pull-right ">
                                        <i class="fa fa-heart"></i> Wishlisted
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-3">
                        <div class="card card-product">
                            <div class="image">
                                <a href="#">
                                    <img src="../assets/img/card-product-1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Burberry Prorsum</h4>
                                </a> 
                                <p class="description">
                                   Printed Fine Cotton-Jersey T-Shirt with floral pattern
                                </p>
                                <div class="footer">
                                    <span class="price"> € 250</span>
                                    <button class="btn btn-danger btn-simple pull-right ">
                                        <i class="fa fa-heart"></i> Wishlisted
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-3">
                        <div class="card card-product">
                            <div class="image">
                                <a href="#">
                                    <img src="../assets/img/card-product-1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#">
                                    <h4 class="title">Burberry Prorsum</h4>
                                </a> 
                                <p class="description">
                                   Printed Fine Cotton-Jersey T-Shirt with floral pattern
                                </p>
                                <div class="footer">
                                    <span class="price"> € 250</span>
                                    <button class="btn btn-danger btn-simple pull-right ">
                                        <i class="fa fa-heart"></i> Wishlisted
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
			</div>
		</div>
	</div>
</div>
</div>


</body>
    <script src="//code.jquery.com/jquery.min.js"></script>

	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/oauth.js"></script>
    <script type="text/javascript">
	OAuth.initialize('_EogkrJQZ9qSXSJNfDmkIKxCQVI');
	</script>
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
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/main.js"></script>
	
	    <script type="text/javascript">
        var big_image;
        var transparent = false;
        
        $().ready(function(){
            responsive = $(window).width();
            
            $(window).on('scroll');
            
            if (responsive >= 768){
                big_image = $('.parallax-image').find('img');
                
                $(window).on('scroll',function(){           
                    parallax();
                 
                });
            }
            
        });
       
       function checkScroll(){	
        	if($(document).scrollTop() > 260 ) {
                if(transparent) {
                    transparent = false;
                    $('nav[role="navigation"]').removeClass('navbar-transparent').addClass('navbar-default');
                }
            } else {
                if( !transparent ) {
                    transparent = true;
                    $('nav[role="navigation"]').addClass('navbar-transparent').removeClass('navbar-default');
                }
            }
        }
    
       var parallax = function() {
            var current_scroll = $(this).scrollTop();
            
            oVal = ($(window).scrollTop() / 3); 
            big_image.css('top',oVal);
        };

    </script>
    
</html>


