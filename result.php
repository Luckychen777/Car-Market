<?php
	require_once('config.php');
	require_once('functions.php');

	 if(isset($_GET['search'])){
	 	$email = $_GET['semail'];

	 	$error = array();

 		if(!searchResult()){
 			$error['ex']="<div class='fail'><h3>No Racords Found For This <b>$email</b> ID</h3></div>";
 			$mfail ='<h3>If You Think You Are facing it by mistake then please <a href="index.php#contact">Contact Us</a></h3>';
 		}
 		if(count($error)==0){
 			
 			$success = "<div class='success'><h3> Racords Found For This <b>$email</b> ID</h3></div>";

 		}



	 }



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Results</title>
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
		
	<div class="search-result">
		<div class="container">
			<h2>Serach Results:</h2>
			<?php
						
						if(isset($error['ex'])){
							echo $error['ex'];
						}
						

			?>
			<?php

					if(isset($mfail)){
						echo $mfail;
					}


			?>
			<?php
						
						if(isset($success)){
							echo $success;
						}
						

					?>

			<div class="my-results">
				<?php 
					global $email;
					$query = mysqli_query($connection,"SELECT *FROM shipAddress WHERE email='$email'");
					 
					while($results = $query->fetch_assoc()) : ?>

					<table class="table table-bordered table table-responsive">
						<thead>
							<th>Name</th>
							<th>Email</th>
							<th>Product</th>
							<th>Quantity</th>
							<th>Status</th>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $results['name'];   ?></td>
								<td><?php echo $results['email'];   ?></td>
								<td><?php echo $results['proname'];   ?></td>
								<td><?php echo $results['proqty'];   ?></td>
								<td><?php echo $results['status'];   ?></td>
							</tr>
						</tbody>

					<?php endwhile; ?>
					</table>

				
			</div>
		</div>

	</div>
	</div>

	<?php  include_once('footer.php');   ?>
</body>
</html>