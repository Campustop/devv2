
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Mist — Multi-Purpose HTML Template" />
        <meta name="author" content="zozothemes.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Home \ Campustop</title>
        <!-- Favicon -->
       <!-- <link rel="shortcut icon" href="img/favicon.ico" />-->
        <link href="<?= SITEURL; ?>webroot/img/favicon.ico" type="text/css" rel="stylesheet">
        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
        <!-- Font Awesome Icons -->
     
         <link href="<?= SITEURL; ?>webroot/css/font-awesome.min.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/bootstrap.min.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/hover-dropdown-menu.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/icons.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/revolution-slider.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/animate.min.css" type="text/css" rel="stylesheet">
         <link href="<?= SITEURL; ?>webroot/css/jqueryui.css" type="text/css" rel="stylesheet">
       
       	<link href="<?= SITEURL; ?>webroot/css/owl/owl.carousel.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/owl/owl.theme.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/owl/owl.transitions.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/style.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/color.css" type="text/css" rel="stylesheet">
        <link href="<?= SITEURL; ?>webroot/css/responsive.css" type="text/css" rel="stylesheet">
         <script src="<?= SITEURL; ?>webroot/js/jquery.min.js"></script> 
         <script src="<?= SITEURL; ?>webroot/js/jquery.validate.js"></script> 
    
        <script src="<?= SITEURL; ?>webroot/js/bootstrap.min.js"></script>
         <script src="<?= SITEURL; ?>webroot/js/bootstrap-strength.js"></script>
          <script src="<?= SITEURL; ?>webroot/js/custom.js"></script>
    	
    </head>
    <body>
    <div id="page">
    <!-- Page Loader -->
    <div id="pageloader">
      <div class="loader-item fa fa-spin text-color"></div>
    </div>
    <div id="top-bar" class="top-bar-section top-bar-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                      
                        <div class="top-social-icon icons-hover-black">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-youtube"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-github"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-rss"></i>
                        </a> 
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar -->
        <!-- Sticky Navbar -->
       <?= $this->element('header') ?>
       <?= $this->fetch('content'); ?>
        <!-- Sticky Navbar -->    
        
        <!-- request -->
        <footer id="footer">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">About Us</h3>
                            </div>
                            <!-- Text -->
                            <p>We like to provide great site with complete features what you want to impletement in your business!</p>
                            <!-- Address -->
                            <p>
                            <strong>Office:</strong> Zozotheme.com
                            <br />No. 12, Ribon Building,
                            <br />Walse street, Australia.</p>
                            <!-- Phone -->
                            <p>
                            <strong>Call Us:</strong> +0 (123) 456-78-90 or
                            <br />+0 (123) 456-78-90</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                            
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">My account</h3>
                            </div>
                            <nav>
                                <ul>
                                    <!-- List Items -->
                                    <li>
                                        <a href="#">My account</a>
                                    </li>
                                    <li>
                                        <a href="#">Order History</a>
                                    </li>
                                    <li>
                                        <a href="#">Shopping Cart</a>
                                    </li>
                                     <li>
                                        <a href="<?= SITEURL; ?>register">">FAQ</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                       <div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">Newsletter Signup</h3>
                            </div>
                            <div>
                                <!-- Text -->
                                <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                                <p class="form-message1" style="display: none;"></p>
                                <div class="clearfix"></div>
                                <!-- Form -->
                                <form id="subscribe_form" action="subscription.php" method="post" name="subscribe_form" role="form">
                                    <div class="input-text form-group has-feedback">
                                    <input class="form-control" type="email" value="" name="subscribe_email" /> 
                                    <button class="submit bg-color" type="submit">
                                        <span class="glyphicon glyphicon-arrow-right"></span>
                                    </button></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
                          
                            <!-- Count -->
                            <div class="footer-count">
                                <p class="count-number" data-count="93550">total downloads : 
                                <span class="counter"></span></p>
                            </div>
                            <div class="footer-count">
                                <p class="count-number" data-count="79550">happy clients : 
                                <span class="counter"></span></p>
                            </div>
                            <!-- Social Links -->
                            <div class="social-icon gray-bg icons-circle i-3x">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a> 
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a></div>
                        </div>
                        <!-- .newsletter -->
                    </div>
                </div>
            </div>
            <!-- footer-top -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyrights -->
                        <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2015 <a href="http://zozothemes.com">zozothemes.com</a>. Creative Agency.
                        <br />
                        <!-- Terms Link -->
                         
                        <a href="#">Terms of Use</a> / 
                        <a href="#">Privacy Policy</a></div>
                        <div class="col-xs-2 col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                            <!-- Goto Top -->
                            <a href="#page">
                                <i class="glyphicon glyphicon-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
        </footer>
        <!-- footer -->
    </div>
    <!-- page -->
    <!-- Scripts -->

   
   
    <!-- Menu jQuery plugin -->
     
 

     <script src="<?= SITEURL; ?>webroot/js/hover-dropdown-menu.js"></script> 
    
    <script src="<?= SITEURL; ?>webroot/js/jquery.hover-dropdown-menu-addon.js"></script> 
    <!-- Menu jQuery Bootstrap Addon --> 
    
     <script src="<?= SITEURL; ?>webroot/js/jquery.easing.1.3.js"></script> 
    <script src="<?= SITEURL; ?>webroot/js/jquery.sticky.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap Validation -->
     
    <script src="<?= SITEURL; ?>webroot/js/bootstrapValidator.min.js"></script>
    <script src="<?= SITEURL; ?>webroot/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= SITEURL; ?>webroot/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/revolution-custom.js"></script>

    <!-- Revolution Slider -->
     
  	<script src="<?= SITEURL; ?>webroot/js/jquery.mixitup.min.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/jquery.appear.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/effect.js"></script>
    <script src="<?= SITEURL; ?>webroot/js//owl.carousel.min.js"></script>

    <script src="<?= SITEURL; ?>webroot/js/jquery.prettyPhoto.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/jquery.countTo.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/tweet/carousel.js"></script>


    <script src="<?= SITEURL; ?>webroot/js/tweet/scripts.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/tweet/tweetie.min.js"></script>
    <script src="<?= SITEURL; ?>webroot/js/jquery.mb.YTPlayer.js"></script>
 	<script src="<?= SITEURL; ?>webroot/js/jquery.mb.YTPlayer.js"></script>

   <script src="<?= SITEURL; ?>webroot/js/tweet/scripts.js"></script>
  <script src="<?= SITEURL; ?>webroot/js/custom.js"></script>
   
   
    <!-- Scripts --></body>
</html>
