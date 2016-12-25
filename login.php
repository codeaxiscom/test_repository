<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link type="text/css" rel="stylesheet" href="includes/Bootstrap/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="includes/Bootstrap/css/bootstrap-theme.min.css" />
		<link type="text/css" rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/login_style.css" />
	</head>
	<body>
		<?php include('header.php'); ?>
		<div class="container login-container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h1 class="login-heading">Login Form</h1>
				</div>
			</div>
			<div class="container-row">
				<div class="buttons-row">
					<button type="button" class="sign-up-button">Sign Up</button>
					<button type="button" class="log-in-button">Log In</button>
				</div>
				<div class="sign-up-row">
					<h2 class="sign-up-text">Sign Up for Free</h2>
				</div>
				<div class="first-input-row">
					<input type="text" class="input-texts" placeholder="First Name" required>
					<input type="text" class="input-texts" placeholder="Last Name" required>
				</div>
				<div class="second-input-row">
					<input type="text" class="email-input input-texts" placeholder="Email Address" required>
				</div>
				<div class="third-input-row">
					<input type="text" class="password-input input-texts" placeholder="Set A Password" required>
				</div>
			</div>
		</div>	
		<script type="text/javascript" href="includes/JQuery/jquery-3.1.0.min.js"></script>
	</body>
</html>

<!---
				<div class="row">
					<div class="col-md-12 col-xs-12 buttons-row">
						<button type="button" class="sign-up-button">Sign Up</button>
						<button type="button" class="log-in-button">Log In</button>
					</div>
				</div>
				<div class="row">

				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<input type="text" class="input-texts" placeholder="First Name '<span>*</span>'" required>
						<input type="text" class="input-texts" placeholder="Last Name"required>
					</div>
				</div>
				-->