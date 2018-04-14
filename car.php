<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Make Your Bids On Car</title>
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
<body class="extra-des">
	<?php include_once('header.php');  ?>
	<div class="image-noise">

	<div class="find-car col-md-12 col-sm-12 col-xs-12">
		<div class="image-noise">
			<div class="form-area col-md-12 col-sm-12 col-xs-12">
				<h2 style="color:#fff;">Choose You Car according to your demand</h2><br>
				<form action="bid.php" method="GET">
					<div class="row col-md-12 col-sm-12 col-xs-12">
						<select  name="brand" class="col-md-offset-1 col-md-3 col-sm-3 col-xs-6 form-control" >
							<option value="">Brand</option>
							<option value="BMW">BMW</option>
							<option value="AUDI">AUDI</option>
							<option value="ALL">All</option>
						</select>
						<select  name="location" class="col-md-offset-1 col-md-3 col-sm-3 col-xs-6 form-control" >
							<option value="">Location</option>
							<option value="Dhaka">Dhaka</option>
							<option value="New York">New York</option>
							<option value="ALL">All</option>
						</select>
						<select name="cc" class="col-md-offset-1 col-md-3 col-sm-3 col-xs-6 form-control">
							<option value="">CC</option>
							<option value="100">100</option>
							<option value="150">150</option>
							<option value="200">200</option>
						</select>
						<br>
						<br>
						<input type="submit" value="Search" name='find' class="col-md-9 col-sm-12 col-xs-12 btn-primary text-center">
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<?php  include_once('footer.php');   ?>
</body>
</html>