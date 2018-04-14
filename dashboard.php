<?php

session_start();
 require_once('config.php');
 require_once('functions.php');

 if(!isset($_SESSION['success'])){
	header('location: login.php');
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
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
		<div class="dashboard-content">
			<div class="container">
				<h2>Welcome To Dashboard</h2><br>

				<?php
				$email3 = $_SESSION['email'] ;

					$query = mysqli_query($connection,"SELECT *FROM user WHERE email='$email3'");
					while($result = $query->fetch_assoc()) : ?>
			

				<div class="row">
					<div class="user-profile col-md-5 col-sm-12 col-xs-12">
						<img style="width:200px; height:auto" src="images/profile.jpg" alt="profile">
					</div>

					<div class="user-deatils col-md-7 col-sm-12 col-xs-12">
						<h5 style="color:#000 !important;">Name : <span style="color:blue;"><?php echo $result['name'];  ?></span></h5>
						<h5 style="color:#000 !important;">Gender : <span style="color:blue;"><?php echo $result['gender'];  ?></span></h5>
						<h5 style="color:#000 !important;">Email : <span style="color:blue;"><?php echo $email2 = $result['email'];  ?></span></h5>
						<h6><a href="logout.php" style="color:red">Logout</a></h6>
					</div>
				</div>

			<?php  endwhile;  ?>
			</div>

			<?php
				global $email2;
				$data = mysqli_query($connection,"SELECT *FROM bidpro WHERE email='$email2' ");
				while($mydata = $data->fetch_assoc()) : ?>

				<div class="my-bid">
					<h2><u>Bid That Offered</u></h2><br><br>
					<table class="table table-bordered table table-responsive">
						<thead>
							<th>Email</th>
							<th>Brand</th>
							<th>CC</th>
							<th>Location</th>
							<th>Status</th>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $mydata['email'];   ?></td>
								<td><?php echo $mydata['brand'];   ?></td>
								<td><?php echo $mydata['cc'];   ?></td>
								<td><?php echo $mydata['location'];   ?></td>
								<td><?php echo $mydata['status'];   ?></td>
							</tr>
						</tbody>

					
					</table>
				</div>


			<?php endwhile; ?>


		
	</div>
	</div>



	


</body>
</html>