<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<body>
<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bot/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bot/css/bootstrap.css">
	<script type="text/javascript" src="bot/js/jquery.min.js"></script>
	<script type="text/javascript" src="bot/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid" id="maincontent">
	<div class="well">
	<div class="center-block" id="images">
		<img src="pictures/signup.jpeg" width="100px" height="100px" class="img-circle" align="center-block">
	</div>
	<hr>
	<div class="container-fluid">
		 <h3 class="hs">register here</h3>
	</div>
	 
		<form role="form" class="inline-form" method="GET">
			<div class="form-group">
				<label for="fname">first name:</label>
				<input type="text" name="firstname" placeholder="enter firstname" >
			</div>
			<div class="form-group">
				<label for="sname">second name:</label>
				<input type="text" name="sname" placeholder="enter-second name">
			</div>
			<div class="form-group">
				<label for="fsch">former school:</label>
				<input type="text" name="fsch" placeholder="enter former school">
			</div>
			<label for="sex">Sex:</label><br>
			<input type="radio" name="sex">male <br>
			<input type="radio" name="sex">female
			<div class="form-group">
				<label for="pass">password</label>
				<input type="password" name="pas">
				<?php 
				$pas=$_GET["pas"];
				if (strlen($pas)<=8) {
					# code...
					echo "password not strong";
				}
				echo strlen($pass);

				 ?>
			</div>
			<div class="form-group">
				<label for="confpas">confirm password</label>
				<input type="password" name="confpass">
				<?php
				$cofpas =$_GET['confpas'];
				if ($cofpas===$pass) {
					# code...
					echo "welcome";
				} else {
					# code...
					echo "wrong password";
				}
				; 
				 ?>
			</div>
			<a href="login.php" class="btn btn-sucess btn-lg">sign up</a>
			</form>
		</div>

</div>
</body>
</html>