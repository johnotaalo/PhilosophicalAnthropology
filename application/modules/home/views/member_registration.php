<!DOCTYPE html>
<html>
<head>
	<title>Member Registration</title>
	<meta name="author" content="Richard Seth Karsan|Medianover.com">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/home-custom.css">

</head>
<body class="reg-body">
<div class="container reg-container">
	<div class="reg-form">
		        <h4 style = "font-family: 'PT Sans Caption', sans-serif !important;" class="modal-title" id="myModalLabel"> Member Registration</h4>
		      <?php echo form_open('home/member_registration'); ?>
		      	<div class="input-names clear margin-bottom">
			      	<input type="text" required title = "Please enter first name" class="inputs" name="fname" placeholder="First Name">
			      	<input type="text" required title = "Please enter second name" class="inputs" name="sname" placeholder="Second Name">
			      	<input type="text" title = "Please enter second name" class="inputs" name="onames" placeholder="Other Names">
		      	</div>
		      	<div class="clear margin-bottom">
		      	<input type="text" required title = "Please enter email" class="inputs" name="email" placeholder="E-mail">
		      	<input type="text" required title = "Please enter username" class="inputs" name="user_name" placeholder="User Name">
		      	</div>

		      	<div class="clear margin-bottom">
		      	<input type="date" required title = "Please enter date of birth" class="inputs" name="dob" placeholder="Date of Birth">
				
				</div>

		      	<div class="margin-bottom clear">
		      	<input type="password" required title = "Enter password" class="inputs" name="pwd" placeholder="Password">
		      	<input type="password" required title = "Re-enter password" class="inputs" name="pwd_retype" placeholder="Re-type Password">
		      	</div>

		      <div class="modal-footer">
		        <button type="submit" class="btn btn-info">Register</button>
		        <?php echo form_close(); ?>
		      </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/home_custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
</body>
</html>