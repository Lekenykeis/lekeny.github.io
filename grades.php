	<!DOCTYPE html>
	<html>
	<head>
		<title>grades</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	  
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<div class="container-fluid" style="background-color: black; text-align: center; color: white; font-family: algerian;">
		<p style="font-family: purisa; font-color: white; font-size: 30px;">Student Grades And Remarks</p>
		<br> 
		<p style="text-align: center; color: silver;">Motto:"Knowledge Is The Key To Success"</p>
		<hr>
		<li class="btn btn-success"><a href="Student.php" class="col-md-12" >Go Back</a></li>
	</div>
	<hr>
	<body class="container-fluid" style="background-color: black; text-align: center; color: white;">
		<div class="container">
		<p>Enter your grades here</p>	
		<form method="_GET" style="color: grey;">
			Maths:<br>
			<input type="number" name="mao" placeholder="Enter  score" required="">
			<br>
			English:<br>
			<input type="number" name="ngoso" placeholder="Enter score" required="">
			<br>
			Kiswahili:<br>
			<input type="number" name="swa" placeholder="Enter  score" required="">
			<br>
			Biology:<br>
			<input type="number" name="chem" placeholder="Enter  score" required="">
			<br>
			Physics:<br>
			<input type="number" name="phyc" placeholder="Enter  score" required="">
			<br>
			Chemistry:<br>
			<input type="number" name="phyc" placeholder="Enter  score" required="">
			<br>
			Computer:<br>
			<input type="number" name="phyc" placeholder="Enter  score" required="">
			<br>
			Geography:<br>
			<input type="number" name="phyc" placeholder="Enter  score" required="">
			<br>
			Spanish:<br>
			<input type="number" name="phyc" placeholder="Enter  score" required="">
			<br>
			History:<br>
			<input type="number" name="histo" placeholder="Enter  score" required="">
			<br>
	<br>
	<br>
	<button class="btn-success" type="submit">SUBMIT</button>
	<button class="btn-danger" type="reset">RESET</button>
	<?php 
	$Maths=$_GET['mao'];
	$English=$_GET['ngoso'];
	$Kiswahili=$_GET['swa'];
	$Chemistry=$_GET['chem'];
	$Physics=$_GET['phyc'];
	$History=$_GET['histo'];

	$total=$Maths+$English+$Kiswahili+$Chemistry+$Physics+$History;
	$meanscore=$total/6;

	if (isset($_GET['grade']))	 {
		# code...

		$grade=$_GET['grade'];
	} 

	if ($meanscore>=90) {
	 	# code...
	 	echo "<strong>You scored grade A</strong>";

	 } 
	elseif ($meanscore>=80) {
		# code...
		echo " <strong>You scored grade A-</strong>";
	}

	elseif ($meanscore>=70) {
		# code...
		echo "<strong>You Scored grade B+</strong>";

	}

	elseif($meanscore>=60) {
		# code...
		echo "<strong>You scored grade B</strong>";

	}

	elseif($meanscore>=50) {
		# code...

		echo "<strong> You scored grade B-</strong>";

	}

	elseif ($meanscore>=40) {
		# code...
		echo "<strong>You scored grade C</strong>";
	}



	 else {

	 	# code...
	 	echo "Work Harder next Time";

	 }

	 ?>
	</form><hr>

	</div>
	<div class="container-fluid" style="background-color: black; text-align: center; color: white;">
		<footer><h5>copyright&copy;HIGHER LEARNINGS@2018</h5></footer>
		<hr>
		Mobile: +254702 451 308------
		E-Mail: clintonkeis799@gmail.com------
		Facebook: @Le_Keny Keis------
		Instagram: @King K_ontire
	<p>Motto:"Knowledge Is The Key To Success"</p>
	</div>
	</body>
	</html>