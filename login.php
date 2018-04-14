<?php

	session_start();

	require_once('config.php');
	require_once('functions.php');

	if(isset($_SESSION['success'])){
	header('location: dashboard.php');
	}
    

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass  = $_POST['pass'];
		$error = array();

		if(!emailExist()){
			$error['nt']="<h2 style='color:#000'>Email Id is not registered</h2>";
		}
		
		if(count($error)==0){
			$check = mysqli_query($connection,"SELECT pass FROM user WHERE email='$email'");
			while($passHolder = $check->fetch_assoc()){
				if($pass== $passHolder['pass'])
				{
					if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    					$ip = $_SERVER['HTTP_CLIENT_IP'];
					} 
					elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   					    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					} 
					else {
    					$ip = $_SERVER['REMOTE_ADDR'];
					}
					//$location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
					//$location = file_get_contents('http://freegeoip.net/json/72.229.28.185');

					$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=103.73.104.235"));
					$country = $geo["geoplugin_countryName"];
					
					if (strpos($country, 'desh') != false) 
					{
						$_SESSION['success']= '';
						$_SESSION['email'] = $email;
						header('location: dashboard.php');
					}
					else
					{
						//$error['nt']=$country;
						$fail= "<h2 style='color:#000'>You're Blocked, Please contact an administrator!</h2>";
					}
				}
				else{
					$fail= "<h2 style='color:#000'>Wrong Password</h2>";
				}
			}
		}
		
	}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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

	<?php  require_once('header.php'); ?>
	<div class="my-container">
		<div class="login-area">
		<div class="container">
			<form action="" method="POST" >
				<input type="email" name="email" placeholder="Email" class=" col-md-6 col-sm-12 col-xs-12 form-control"><br>
				<?php 
					if(isset($error['nt'])){
						echo $error['nt'];
					}

				?>
				<input type="password" name="pass" placeholder="Password" class=" col-md-6 col-sm-12 col-xs-12 form-control"><br>
				<?php
					if(isset($fail)){
						echo $fail;
					}

				?>
				<input type="submit" value="Login" name="login" class="custom-btn col-md-6  col-sm-12 col-xs-12 btn-primary form-control">
			</form>
			<div class="my-alert">
				If you haven't <b>sign up</b> yet .Then Please<a href="register.php"> Register</a>
			</div>
		</div>
	</div>
	</div>
</body>
</html>