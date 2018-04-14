<?php

session_start();
require_once('config.php');
if(isset($_SESSION['success'])){
	header('location: dashboard.php');
}

if(isset($_POST['info_pass'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$gender = $_POST['gender'];

	$insert= mysqli_query($connection,"INSERT INTO user (name,email,pass,gender) VALUES('$name','$email','$pass','$gender')");

	if($insert){
		
		header('location: dashboard.php');
		
	}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="style.css">

	<script src=js/jquery-3.2.1.min.js></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src=js/custom.js></script>
</head>
<body>
	<?php include_once('header.php'); ?>
	<div class="my-container">
		<div class="container">
		<div class="row">
				<div class="sign-form-area col-md-7 col-sm-12 col-xs-12">
		<div class="container">
			<form action="" method="POST" class="col-md-12 col-sm-12 col-xs-12 ">
				<h3>Register and get better access to get information</h3>
				<label>Name <span>*</span></label>
				<input class="form-control" type="text" name="name" placeholder="Full Name" required="required">
				<label>Email <span>*</span></label>
				<input class="form-control" type="email" name="email" placeholder="Email" required="required">
				<label>Password <span>*</span></label>
				<input class="form-control" type="password" name="pass" placeholder="Password" required="required">
				<label>Gender <span>*</span></label>
				<select class="form-control" name="gender" required="required" >
					<option value="sl">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
				<br>
				<input type="submit" value="Register" name="info_pass" class="form-control btn-primary">
			</form>
		</div>
	</div>

	<div class="login-area col-md-5 col-sm-12 col-xs-12">
		<div class="container">
			<div class="sign-in-area">
				<br>
				<br>
				If you have account already.Then Please<a href="login.php"> Login</a>
			</div>
		</div>
		
	</div>
		</div>
	</div>
	</div>

</body>
</html>