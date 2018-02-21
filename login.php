<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bot/css/bootstrap.css">
	<script type="text/javascript" src="bot/js/jquery.min.js"></script>
	<script type="text/javascript" src="bot/js/bootstrap.js"></script>
</head>
<body>
	
<div class="container-fluid">
	<div class="well">
		<form role="form" class="inline-form" method="GET">
		<div class="center-block pull-left">
		<img src="pictures/sch.jpeg" class="img-circle " width="100px" height="100px">
		</div>
		<div class="pull-right container-fluid">
			<h3 class="hs">ENTER YOUR LOGIN DETAILS TO ACESS THE HOMEPAGE </h3>
		</div>
		<hr>
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="enter your name">
		</div>
		<div class="form-group">
			<input type="password" name="admission" placeholder="enter your admission number" class="form-control">
		</div>
		<button class="btn btn-success btn-block" name="button">log in</button>
		<?php 
		$button = $_GET['button'];
		if ($button==true) {
			# code...
			echo "";
		}
		 ?>
	</form>
	</div>
	
</div>
</body>
</html>