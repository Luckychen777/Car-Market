<?php 

	
	session_start();

 require_once('config.php');
 require_once('functions.php');

 if(!isset($_SESSION['success'])){
	header('location: login.php');
}

	if(isset($_GET['find'])){
		$brand = $_GET['brand'];
		$location = $_GET['location'];
		$cc = $_GET['cc'];
	}

	
	
	if(isset($_POST['offer'])){
		$price= $_POST['price'];
		$email = $_POST['email'];
		$brand = $_POST['car'];
		$cc = $_POST['cc'];
		$location = $_POST['location'];

		$insert =mysqli_query($connection,"INSERT INTO bidpro(price,email,status,brand,cc,location) VALUES('$price','$email','unpaid','$brand','$cc','$location')");

		if($insert=== TRUE){
			echo '<script>alert("Offer Submitted")</script>';
		}

		// if($insert=== TRUE){
		// 	$to = $email;
		// 	$subject = "Online Car selling";
		// 	$txt = "Hello Dear, We got you Bid . We will see about that";
		// 	$headers = "From: carseling@gmail.com" . "\r\n" ."CC: somebodyelse@example.com";

		// 	mail($to,$subject,$txt,$headers);
		// }

		
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Car Serach Results</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="style.css">



</head>
<body>
	<?php include_once('header.php'); ?>
	<div class="my-container">
		<div class="car-description-area">
		<div class="container">
			<div class="row">
				<?php

					global $brand;
					global $location;
					global $cc;

					$query = mysqli_query($connection,"SELECT *FROM oldcar WHERE brand='$brand' OR location='$location' OR cc='$cc' ");
					while($result = $query->fetch_assoc()) : ?>

				

				<div class="car-1 col-md-4 col-sm-2 col-xs-1">
					<img style="max-width:250px; max-height:180px;" class="img-responsive" src="admin/<?php echo $result['image']  ?>" alt="BmW">
					<h4 style="color:#000;">Car Model: <?php   echo $result['brand']; ?></h4>
					<h4 style="color:#000;">CC :<?php   echo $result['cc']; ?> </h4>
					<h4 style="color:#000;">Location : <?php   echo $result['location']; ?></h4>

					<form action="" method="POST" class="pform">
						<input type="number" name="price" min="400" placeholder="Min 400$" class="cprice form-control" required="required">
						<input type="email"   placeholder="Your Valid Email" class="cemail form-control" required="required" name="email" value="<?php echo $_SESSION['email'];?>">
						<input type="hidden" name="car" value="<?php  echo $result['brand'];   ?>">
						<input type="hidden" name="cc" value="<?php  echo $result['cc'];   ?>">
						<input type="hidden" name="location" value="<?php  echo $result['location'];   ?>">

						<input type="submit" value="Offer" class="form-control btn-primary" name="offer">
					</form>
					<div class="write">
						<p></p>
					</div>
					
				</div>
			<?php endwhile; ?>
			</div>

			
		</div>
	</div>
	</div>
	<?php  include_once('footer.php');   ?>
	<script src=js/jquery-3.2.1.min.js></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src=js/custom.js></script>
</body>
</html>