<?php 


	session_start();

	include("includes/con.php");

	$output = "";


	if(isset($_POST['login']))  {

		$uname = $_POST['uname'];
		$pass  = $_POST['pass'];



		if(empty($uname)) {

		}else if(empty($pass)) {

		}else {
			$query = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

			$res = mysqli_query($connect,$query);

			if(mysqli_num_rows($res) == 1) {

				$output .="You have Logged-In"; 

			}else{
				$output .="Failed to Login";
			}

		}
	}






















 ?>



























<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>



	<?php include("includes/header.php"); ?>


	<div class="container">
		<div class="col-md-12">
				<div class="row d-flex justify-content-center">
						<div class="col-md-6 shadow-sm" style="margin-top:100px;">
							<form method="post">
								<h3 class="text-center my-3">Login</h3>


								<div class="text-center"><?php echo $output; ?></div>


								<label>Username</label>
								<input type="text" name="uname" class="form-control my-2" placeholder="Enter Username" autocomplete="off"> 


								<label>Password</label>
								<input type="password" name="pass" class="form-control my-2" placeholder="Enter Password" >


								<center><input type="submit" name="login" class="btn btn-success my-2" value="Login"></center>
							</form>
						</div> 
				</div>
		</div>
	</div>


</body>
</html>