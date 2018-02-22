<!DOCTYPE html>
<html>
<head>
	<title>myhome</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body class="container-fluid" style="background-color: grey;">
<div class="container-fluid">
	 <div class="jumbotron" style="background-color: black;">
			<ul>
				<button><li><a href="#" class="btn btn-success">Home</a></li></button>
		 		<button><li><a href="#" class="btn btn-success"></a></li></button>
				<button><li><a href="#" class="btn btn-success">Gallery</a></li></button>
				<button><li><a href="#" class="btn btn-success">Find Us</a></li></button>
				<button><li><a href="#" class="btn btn-success">Login</a></li></button>
			</ul>
	   </div>
	<div class="jumbotron" style="background-color: silver">
	<div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<?php 
		// declaring variables
		$sita=6;
		echo $sita;


	 ?>
	 <form method="GET" style="text-align: center;">
	 	NumOne:<br><input type="number" name="numone" required=""><br><br>
	 	NumTwo:<br><input type="number" name="numtwo" required=""><br><br><br>
	 	<button class="btn-success">submit</button>              <button class="btn-danger">reset</button>

	 </form>
	 <?php
	 	$keis=$_GET['numone'];
	 	$klint=$_GET['numtwo'];
	 	$clinton=$keis*$klint;


	 	echo "$clinton";
	  ?>
	  </div>
	  <br>
	  <div class="jumbotron" style="background-color: brown; text-align: center;">
	  	<h3>if else statement</h3>
	  	<form method="GET">
	  		<input type="number" name="numthree" placeholder="enter number here" required="">
	  		<button type="submit" class="btn-info">submit</button>
	  	</form>
	  	<?php 
	  		$joshu=$_GET['numthree'];
	  		if ($joshu<30) {
	  			# code...
	  			echo "Allela";
	  		}else{
	  			# code...
	  			echo "No one else";
	  		}

	  	 ?>
	  	 <br>
	  	 <br>
	  	 <?php 
	  	 	$claire=22;
	  	 	if ($claire<15) {
	  	 		# code...
	  	 		echo "clint is";

	  	 	}else{
	  	 		# code...
	  	 		echo "papa";
	  	 	}

	  	  ?>
	  	  <span class="glyphicon glyphicon-heart"></span>

	  </div>
	  <br>
	  <div class="jumbotron" style="background-color: grey; text-align: center;">
	  	 <h3>Elseif statement</h3>
	  	 <form method="GET">
	  	 	<input type="number" name="numfour" required=""><br>
	  	 	<button class="btn-success">submit</button><span class="glyphicon glyphicon-ok"></span>
	  	 </form>
	  	 <?php 
	  	 	$dud=$_GET['numfour'];
	  	 	if ($dud==20) {
	  	 		# code...
	  	 		echo "nice";
	  	 	}elseif ($dud>30) {
	  	 		# code...
	  	 		echo "nicer";
	  	 	}elseif ($dud>40) {
	  	 		# code...
	  	 		echo "even nicer";
	  	 	}elseif ($dud>50) {
	  	 		# code...
	  	 		echo "even more nice";
	  	 	}elseif ($dud>60) {
	  	 		# code...
	  	 		echo "much nicer";
	  	 	}elseif ($dud>70) {
	  	 		# code...
	  	 		echo "the best";
	  	 	}
	  	  ?>
	  </div>
	  <div class="jumbotron" style="background-color: green; text-align: center;">
	  	Password:
	  	<br>
	  	<input type="Password" name="numfive">
	  	<button class="btn-info">submit</button>
	  </div>
	  <br>
	  <div class="jumbotron" style="background-color: black;">
	  	<footer class="footer" style="text-align: center;">this is my footer</footer>
	   </div>
<div class="jumbotron" style="background-color: black; text-align: center; text-decoration-color: white;">
	<footer><h5>copyright&copy;HIGHER LEARNINGS@2018</h5></footer>
	<hr>
	Motto:"Education Is The Key To Success"
</div>
</div>
</body>
</html>