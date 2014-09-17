<?php 
// echo "<pre>";print_r($this->session->all_userdata());echo "</pre>";
// echo "<pre> Extra: ";print_r($this->session->userdata('user_data'));echo "</pre>";
// exit;
 ?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Philosophical Anthropology|Human Sexuality and Freedom</title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php echo base_url() . 'assets/_include/css/bootstrap.min.css'?>" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo base_url() . 'assets/_include/css/main.css'?>" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo base_url() . 'assets/_include/css/supersized.css'?>" rel="stylesheet">
<link href="<?php echo base_url() . 'assets/_include/css/supersized.shutter.css'?>" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo base_url() . 'assets/_include/css/fancybox/jquery.fancybox.css'?>" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo base_url() . 'assets/_include/css/fonts.css'?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">

<!-- Shortcodes -->
<link href="<?php echo base_url() . 'assets/_include/css/shortcodes.css'?>" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo base_url() . 'assets/_include/css/bootstrap-responsive.min.css'?>" rel="stylesheet">
<link href="<?php echo base_url() . 'assets/_include/css/responsive.css'?>" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo base_url() . 'assets/_include/css/supersized.css'?>" rel="stylesheet">
<link href="<?php echo base_url() . 'assets/_include/css/supersized.shutter.css'?>" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="<?php echo base_url() . 'assets/_include/js/modernizr.js'?>"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Home | Human Sexuality and Freedom">Homepage</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">Content</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
				<!-- <li><a href="shortcodes.html" class="external">Shortcodes</a></li> -->

            </ul>
            <div class="align_right">
            <?php 
                if (($this->session->userdata('user_data') != null)) {
                    echo '<p>You are logged in as: '.$this->session->userdata('user_data').' <a href="home/logout"> Logout </a> </p>';
                }else{
                    echo '<p>You are not logged in. <a id="login_show"> Login/Register </a></p>';
                }
             ?>
               
            </div>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
        
<div>
        <?php
        $attr = array('id'=>'login_form' ,'class'=>'animated display-none');
         echo form_open('home/login',$attr); ?>
            <input type="text" name="username" placeholder="Username/Email"> 
            <input type="password" name="password" placeholder = "Password">
            
       <div id="login">
             <button class="submit" id="login-submit" type="submit">Login</button>
             <!-- <button class = "btn btn-default login_submit" id="member_register" type="button" data-toggle="modal" data-target="#myModal">Register</button> -->
        </div>
             <a class="clear" id="member_register" href="<?php echo base_url();?>home/reg_home">Not a Member? Register here</a>
        <?php echo form_close();?>
</div>
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Philosophical Anthropology</h2>
                    <h3 class="title-description">Human Sexuality and Freedom.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Welcome</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Everything</a></li>
                        <li><a href="#filter" data-option-value=".content">Content</a></li>
                        <li><a href="#filter" data-option-value=".downloads">Downloads</a></li>
                        <li><a href="#filter" data-option-value=".video">Videos</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 video">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Videos" href="videos/index">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url() ?>assets/_include/img/work/thumbs/image-01.png" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                        
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 content">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Human Sexuality" href="<?php echo base_url() ?>content/human_sexuality">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url() ?>assets/_include/img/work/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 content">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Human Freedom" href="<?php echo base_url() ?>content/human_freedom">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url() ?>assets/_include/img/work/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                                                        
							<!-- Item Project and Filter Name -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 downloads">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap"  title="Download Videos" data-fancybox-group="gallery" href="videos/index">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url() ?>assets/_include/img/work/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 downloads">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Download Notes" href="videos/index">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url() ?>assets/_include/img/work/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">About Us</h2>
                <h3 class="title-description">Learn About our Team &amp; Culture.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">BIF II Yr Student</span>
                </div>
                <img src="<?php echo base_url() ?>assets/_include/img/profile/profile-01.jpg" alt="John Chrispine Otaalo">
            </div>
            <h3 class="profile-name">John Chrispine Otaalo</h3>
            <p class="profile-description">
            Having passed DBIT with a distinction,this magnanimous character played an immense role in the making of this system. He is a skilled individual with a dedication to his work and a keen eye to detail.
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-dribbble"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">BIF II Yr Student</span>
                </div>
                <img src="<?php echo base_url() ?>assets/_include/img/profile/profile-02.jpg" alt="Karsan Richard Seth">
            </div>
            <h3 class="profile-name">Karsan Richard Seth</h3>
            <p class="profile-description">
            Karsan Richard Seth is a BIF(exempt) student with precision in his work,attention to detail, a creative mind full of innovation and ideas and the capability to turn those ideas into more than just reality.
            <div class="social">
            	<ul class="social-icons">
                    <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="karsanrichard@gmail.com"><i class="font-icon-social-google-plus"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-email"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">BIF II Yr Student</span>
                </div>
                <img src="<?php echo base_url() ?>assets/_include/img/profile/profile-03.jpg" alt="Joshua Nyeole Bakasa">
            </div>
            <h3 class="profile-name">Joshua Nyeole Bakasa</h3>
            <p class="profile-description">
            Joshua Bakasa was a crucial part of the making of this beautiful system,he took part in the making of fundamentals in the system and knows his way with words. If code had a human entity,it would be Joshua. 
            <div class="social">
            	<ul class="social-icons">
                	<li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->

<!-- Twitter Feed -->
<div id="" class="page-alternate">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="span4 profile margin">
            <div class="image-wrap">
                <div class="hover-wrap align_left">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Catherine Dean</span>
                </div>
                <img src="<?php echo base_url() ?>assets/_include/img/profile/profile-03.jpg" alt="Joshua Nyeole Bakasa">
        </div>
            </div>
            <h3 class="profile-name margin_left">Catherine Dean</h3>
            <h4>Philosophical Anthropology Lecturer</h4>
            <p class="profile-description margin_left">
            Mrs Catherine Dean was the inspiration towards the making of this system. 
            <div class="social">
                <ul class="social-icons">
                    <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                    <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- End Twitter Feed -->

<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Get in Touch</h2>
                <h3 class="title-description">We’re currently accepting new projects or ideas for such and look forward to serving you.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="contact-submit" class="submit" href="#">Send Your Email</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Contact Details</h3>
                <ul>
                    <li><a href="#">hello@brushed.com</a></li>
                    <li>(916) 375-2525</li>
                    <li>
                        Brushed Studio
                        <br>
                        5240 Vanish Island. 105
                        <br>
                        Unknow
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

<!-- Twitter Feed -->
<div id="twitter-feed" class="page-alternate">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <div class="follow">
                    <a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><i class="font-icon-social-twitter"></i></a>
                </div>
                    
                <div id="ticker" class="query"> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Twitter Feed -->

<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="http://dribbble.com/Bluxart" title="Follow Me on Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                        <li><a href="http://forrst.com/people/Bluxart" title="Follow Me on Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                        <li><a href="http://www.behance.net/alessioatzeni" title="Follow Me on Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                        <li><a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                        <li><a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                        <li><a href="http://themeforest.net/user/Bluxart" title="Follow Me on ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                        <li><a href="http://zerply.com/Bluxart/public" title="Follow Me on Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/_include/js/bootstrap.min.js'?>"></script> <!-- Bootstrap -->
<script src="<?php echo base_url() . 'assets/_include/js/supersized.3.2.7.min.js'?>"></script> <!-- Slider -->
<script src="<?php echo base_url() . 'assets/_include/js/waypoints.js'?>"></script> <!-- WayPoints -->
<script src="<?php echo base_url() . 'assets/_include/js/waypoints-sticky.js'?>"></script> <!-- Waypoints for Header -->
<script src="<?php echo base_url() . 'assets/_include/js/jquery.isotope.js'?>"></script> <!-- Isotope Filter -->
<script src="<?php echo base_url() . 'assets/_include/js/jquery.fancybox.pack.js'?>"></script> <!-- Fancybox -->
<script src="<?php echo base_url() . 'assets/_include/js/jquery.fancybox-media.js'?>"></script> <!-- Fancybox for Media -->
<!--<script src="<?php //echo base_url() . 'assets/_include/js/jquery.tweet.js'?>"></script> <!-- Tweet -->
<script src="<?php echo base_url() . 'assets/_include/js/plugins.js'?>"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo base_url() . 'assets/_include/js/main.js'?>"></script> <!-- Default JS -->

<!-- End Js -->

</body>
</html>