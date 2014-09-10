<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Richard Seth Karsan|Medianover.com">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/home-custom.css">
	<title>Example Site</title>
</head>
<body>
<div id="container">
<div id="main-image">
<div class="slogan clearfix">
	<h1>Beauty in Simplicity</h1><br>
	<p class="slogan-p">Lorem ipsum dolor sit amet.</p>
<div id="slogan-buttons">
	<!-- <a href="#" class="">Mission</a> -->

<div class="dropdown">
  <button class="slogan-buttons" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Selection
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Human Freedom</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Human Sexuality</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Relation</a></li>
  </ul>
</div>
</div>

</div>

<div id="login" class="login animated fadeOutUp">
	<input type="text" class="form-control float-left" name="username" placeholder="Username/Email"> 
	<input type="password" class="form-control float-left" name="pwd" placeholder = "Password">
     <button class="btn btn-default" type="button">Login</button>
</div>

</div>
<div id="site-content" class="clearfix">
	<div id="menu" class="menu-custom" onclick="scrollDown()">
		<ul class="nav nav-pills" role="tablist">
		  	<li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
		  	<li><a href="#contact" role="tab" data-toggle="tab">Contact</a></li>
		  	<li><a href="#portfolio" role="tab" data-toggle="tab">Portfolio</a></li>
		  	<li><a href="#about" role="tab" data-toggle="tab">About</a></li>
		  	<li><a href="#history" role="tab" data-toggle="tab">Where We're From</a></li>
		</ul>
	</div>
	<div id="tab-content" class="tabs-custom">
	<div class="tab-pane fade in active" id="home">
		<div id="top-home-content">
			
		</div>
	</div>
	
	<div class="tab-pane fade clearfix" id="contact">
		<input type="email" class="">
	</div>
	
	<div class="tab-pane fade clearfix" id="portfolio">
		<p>qwertyui</p>
	</div>
	
	<div class="tab-pane fade clearfix" id="history">
		
	</div>
	
	<div class="tab-pane fade clearfix" id="about">
	<div class="clearfix" id="about-content">
		<div class="info-tabs clearfix">
			<div class="info-tab-content ">
			<img src="<?php echo base_url() ?>assets/img/portrait-1.jpg">
			<h2>John Chrispine Otaalo</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			</div>

			<div class="info-tab-content ">
			<img src="<?php echo base_url() ?>assets/img/portrait-2.jpg">
			<h2>Karsan Richard Seth</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			</div>

			<div class="info-tab-content ">
			<img src="<?php echo base_url() ?>assets/img/portrait-4.jpg">
			<h2>Bakasa Joshua</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			</div>

			<div class="convo">
				<div id="convo-1">
				<img src="<?php echo base_url() ?>assets/img/portrait-1.jpg">
					<h3>John Chrispine Otaalo</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>

				<div id="convo-2">
				<img src="<?php echo base_url() ?>assets/img/portrait-2.jpg">
					<h3>Karsan Richard Seth</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>

				<div id="convo-3">
			<img src="<?php echo base_url() ?>assets/img/portrait-4.jpg">

					<h3>Bakasa Joshua</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- end of about div -->
	</div>
	<!-- end of tab content -->
	<div>
	<!-- end of site content -->
		
	</div>
	<footer>
		<small>&copy;Richard Seth Karsan|John Chrispine Otaalo|Bakasa Joshua (2014) This template is owned solely by OUR GROUP and can not be used or redistributed without purchase</small>
		<div class="back-to-top">
			<button type="button" onclick="scrollUp()" id="login_button" class="btn btn-default"> Login <span class = "glyphicon glyphicon-user"></span></button>
			<button type="button" onclick="scrollUp()" id="back-to-top" class="btn btn-default"> Back to Top <span class = "glyphicon glyphicon-hand-up"></span></button>
		</div>
	</footer>

</div>
<!-- end of site content -->
</div>
<!-- end of container -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>