<?php
	session_start();
	if(isset($_SESSION['admin'])){
	    header('location: welcome.php');
	    
	}
	
	if(isset($_POST['info_pass'])){
		$name = $_POST['username'];
		$pass = $_POST['pass'];
		$error = array();

		define('ADMIN','admin');
		define('PASSWORD','123456');

		if($name==NULL){
			 $error['nm']="<h4>Usernmae Required</h4>";
		}
		if($pass==NULL){
			 $error['pa']="<h4>Password required</h4>";
		}
		if($name!==ADMIN){
			 $error['wr']="<h4>Wrong Username</h4>";
		}
		if($pass!==PASSWORD){
			 $error['p']="<h4>Wrong Password</h4>";
		}
		
		if(count($error)==0){
		header('location: welcome.php');
			$_SESSION['admin']= '';
		}

	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php		

			include_once('title.php');

			function title(){

			echo $mytitle= "Admin Login";
			
		}

	?>
</head>
<body>
	
</body>
</html>
<body>
	<div class="admin-area col-md-12 col-xs-12 col-sm-12">
		<div class="container">
			<div class="form-area">
					<h2>Admin Login | Car- Online Car Parking Website/h2>
				<form action="" method="POST">
					<input type="text" name="username" placeholder="Username">
					<div class="error">
						<?php 
							if(isset($error['nm'])){
								echo $error['nm'];
							}
							if(isset($error['wr'])){
							    echo $error['wr'];
							}
						 ?>
						 
					</div>
					<input type="password" name="pass" placeholder="Password">
					<div class="error">
						<?php 
							if(isset($error['pa'])){
								echo $error['pa'];
							}
						
							if(isset($error['p'])){
							    echo $error['p'];
							}
						 ?>
					</div>
					<input type="submit" value="Login" name="info_pass">
				</form>
			</div>
		</div>
	</div>
</body>
</html>