<?php 


	include("includes/con.php");


	$output = "";


	if(isset($_POST['register'])) {


		$fname 	= $_POST['fname'];
		$sname  = $_POST['sname'];
		$uname  = $_POST['uname'];
		$pass  	= $_POST['pass'];
		$c_pass = $_POST['c_pass'];




		$error = array(); 


		if(empty($fname)) {
			$error['error'] = "Firstname is Empty";
		}else if(empty($sname)) {
			$error['erroe'] = "Lastname is Empty";
		}else if(empty($uname)) {
			$error['error'] = "Username is Empty";
		}else if(empty($pass)) {
			$error['error'] = "Passwors is Empty";
		}else if(empty($c_pass)){
			$error['error'] = "Confirm Password is Empty";
		}else if($pass != $c_pass){
			$error['error'] = "Both passwords are not Match";
		}


		if(isset($error['error'])) {

			$output .= $error['error']; 
		}else{
			$output .= "";
		}



		if(count($error) < 1) {

			$query = "INSERT INTO users(firstname,lastname,username,password) VALUES('$fname','$sname','$uname','$pass')";

			$res = mysqli_query($connect,$query);


			if ($res) {

				$output .= "You have Successfully Registered";
			}else{

				$output .= "Failed to Register";
			}
		}
	}
 





 ?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body bgcolor="blue">

	<?php include("includes/header.php") ?>



	<div class="conteiner">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<form method="post">
						
						<h3 class="text-center my-3">Registration</h3>


						<div class="text-center"><?php echo $output ?></div>


						<label>First Name</label>
						<input type="text" name="fname" class="form-control my-2" placeholder="Enter Firstname" autocomplete="off">

						<label>Last Name</label>
						<input type="text" name="sname" class="form-control my-2" placeholder="Enter Lastname" autocomplete="off">

						<label>Username</label>
						<input type="text" name="uname" class="form-control my-2" placeholder="Enter Username" autocomplete="off">


						<label>Password</label>
						<input type="password" name="pass" class="form-control my-2" placeholder="Password">

						
						<label>Confirm Password</label>
						<input type="password" name="c_pass" class="form-control my-2" placeholder="Confirm Password">


						<center><input type="submit" name="register"
						 class="btn btn-success my-2" value="Register"></center>

					</form>
				</div>
			</div>
		</div>
	</div>


</body>
</html>