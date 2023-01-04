<?php 



	include("includes/con.php");

	$output = "";

	if(isset($_POST['login'])) {

		$uname = $_POST['uname'];
		$pass  = $_POST['pass'];



		if(empty($uname)) {


		}else if(empty($pass)) {


		}else {

			$query = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

			$res = mysqli_query($connect,$query);


			if(mysqli_num_rows($res) == 1) {

				$output .= "You Have Logged-In";
			}else {

				$output .="Failed TO Login ";
			}
		}

	}











 ?>













<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

	


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
		<h3 class="navbar-brand text-white">Login</h3>


		<div class="mr-auto"></div>

		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">Login</a>
			</li>
			<li class="nav-item">
				<a href="register.php" class="nav-link">Registration</a>
			</li>
		</ul>
	</nav>

</body>
</html>