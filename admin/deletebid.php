<?php
session_start();
 require_once('../config.php');

 if(!isset($_SESSION['admin'])){
	    header('location: index.php');
	    die();

	}

 if(isset($_POST['delete'])){

   $randid = $_POST['randid'];

    $delete = mysqli_query($connection,"DELETE FROM oldcar WHERE randid='$randid'");
         if($delete === TRUE){
            echo "<script>alert('Successfully Deleted')</script>";
         }
         else{
            echo "<script>alert('something went Wrong')</script>";
         }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Car</title>
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
	<div class="cover-area">
		<div class="container">
			<div class="row">
				<?php

					global $brand;
					global $location;
					global $cc;

					$query = mysqli_query($connection,"SELECT *FROM oldcar ");
					while($result = $query->fetch_assoc()) : ?>

				

				<div class="car-1 col-md-4 col-sm-2 col-xs-1">
					<img style="max-width:250px; max-height:180px;" class="img-responsive" src="<?php echo $result['image']  ?>" alt="BmW">
					<h4 style="color:#000;">Car Model: <?php   echo $result['brand']; ?></h4>
					<h4 style="color:#000;">CC :<?php   echo $result['cc']; ?> </h4>
					<h4 style="color:#000;">Location : <?php   echo $result['location']; ?></h4>
					<h4 style="color:#000;">Car ID : <?php   echo $result['randid']; ?></h4>

					<form action="" method="POST">
						<!-- <input type="number" name="price" min="400" placeholder="Min 400$" class="cprice form-control" required="required"> -->
						<input type="hidden"   name="randid" value="<?php  echo $result['randid'];  ?>">

						<input type="submit" value="Delete" class="form-control btn-primary" name="delete">
					</form>
					<div class="write">
						<p></p>
					</div>
					
				</div>
			<?php endwhile; ?>
			</div>
		</div>

	</div>


	<script src=js/jquery-3.2.1.min.js></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src=js/custom.js></script>
</body>
</html>