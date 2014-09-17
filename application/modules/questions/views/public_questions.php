<!DOCTYPE HTML>
<html>
<head>
<title>Access Denied</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/Flat-UI/bootstrap/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/Flat-UI/css/flat-ui.css'?>">
<link href="<?php echo base_url() . 'assets/_include/css/main.css'?>" rel="stylesheet">

<style type="text/css">
	div#test
	{
		border: #000 1px solid;
		padding: 10px 40px 40px 40px;
	}
</style>
</head>
<body>
<!-- <form method="" action = ""> -->
<label>Before you start answering the quesions please choose enter your email address</label>
<form action = 'questions/addAnswered' method ='POST' id = 'submit'>
<input type = "email" name = "useremail" placeholder = "emailaddress" class = "form-control" required/>
<h2 id = "test_status"></h2>
<div id = "test"></div>
</form>
<!-- </form> -->

<script type="text/javascript" src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-1.8.3.min.js'?>"></script>
<script type="text/javascript" src = "<?php echo base_url() . '/assets/js/core.js'?>"></script>
</body>
</html>