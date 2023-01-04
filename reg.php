<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<div class="wrapper">
		<div class="title-text">
			<div class="title login">Login Form</div>
			<div class="title signup">Signup Form</div>
		</div>
		<div class="form-container">
			<div class="slide-control">
				<input type="radio" name="slider" id="login" checked>
				<input type="radio" name="slider" id="signup">
				<label for="login" class="slide login">Login</label>
				<label for="signup"	class="slide signup">signup</label>
				<div class="slide-tab"></div>
			</div>
			<div class="form-inner">
				<form action="#" class="login">
					<div class="field">
						<input type="text" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="password" placeholder="Passowrd" required>
					</div>
					<div class="pass-link"><a href="#">Forgot Password?</a></div>
					<div class="field">
						<input type="submit" value="Login">
					</div>
					 <div class="signup-link">Not a Member? <a href="#">Signup Now</a></div> 
				</form>
				<form action="#" class="signup">
					<div class="field">
						<input type="text" placeholder="Email Address" required>
					</div>
					<div class="field">
						<input type="password" placeholder="Passowrd" required>
					</div>
					<div class="field">
						<input type="password" placeholder="Confirm passowrd" required>
					</div>
					<div class="field">
						<input type="submit" value="Sign Up">
					</div> 
				</form>
			</div>
		</div>
	</div>

	<script>
		
		const loginForm = document.querySelector()
	</script>

</body>
</html>