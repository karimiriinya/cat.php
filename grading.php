<!DOCTYPE html>
<html>
<head>
	<title>grade system</title>
</head>
<body>
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bot/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bot/css/bootstrap.css">
	<script type="text/javascript" src="bot/js/jquery.min.js"></script>
	<script type="text/javascript" src="bot/js/bootstrap.js"></script>
	<style type="text/css">
		body{background-image: url(pictures/grading.jpeg);
			background-repeat: no-repeat;
			background-size: 100%}


	</style>
</head>
<body>
	<div id="maincontent">
		<div class="well">
				<h4 class="hs"><q>enter grades for verification process</q></h4> 
				<hr>
			</div>
			<form class="inline-form" method = "GET" role="form">
				<div class="form-group">
					<label for="math">math</label>
					<input type="number" name="math">
				</div>
					<div class="form-group">
					<label for="english">English</label>
					<input type="number" name="eng">
				</div>
					<div class="form-group">
					<label for="kiswahili">kiswahil</label>
					<input type="number" name="kis">
				</div>	<div class="form-group">
					<label for="phyc">physics</label>
					<input type="number" name="phy">
				</div>	<div class="form-group">
					<label for="chemistry">chem</label>
					<input type="number" name="chem">
				</div>
					<div class="form-group">
					<label for="comps">comps</label>
					<input type="number" name="comps">
					<button  class="btn btn-success">submit</button>
					<button class="btn btn-danger">reset</button>
				</div>

				<?php
					$m = $_GET["math"];
					$e = $_GET["eng"];
					$k = $_GET["kis"];
					$p = $_GET["phy"];
					$c = $_GET["chem"];
					$a = $_GET["comps"];
					$grade =($m+$e+$k+$p+$c+$a)/6;
					echo "average grade:".$grade."grade:";
	if ($grade>=90) {
  	# code...
  	echo "A";
  }
  elseif ($grade>=70) {
  	# code...
  	echo "B";
  }
  elseif ($grade>=60) {
   	# code...
   echo "C";
   } 
   elseif ($grade>=50) {
   	# code...
   	echo"D";
   }
  else {
  	# code...
  	echo "E";
  } 
				 ?>
			</form>
		</div>
	</div>

</body>
</html>