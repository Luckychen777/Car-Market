<?php
	require_once('config.php');

	if(isset($_POST['info_pass'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$proname = $_POST['proname'];
		$proqty  = $_POST['proqty'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$zip   = $_POST['zip'];
		$country = $_POST['country'];

		$sname = $_POST['sname'] ? $_POST['sname']: $name;
		$semail = $_POST['semail'] ? $_POST['semail']: $email;
		$scity = $_POST['scity'] ? $_POST['scity']: $city;
		$saddress = $_POST['saddress'] ? $_POST['saddress']: $address;
		$szip   = $_POST['szip'] ? $_POST['szip']: $zip;
		$scountry = $_POST['scountry'] ? $_POST['scountry']: $country;


		$insert = mysqli_query($connection,"INSERT INTO shipAddress(name,sname,email,proname,proqty,semail,city,scity,address,saddress,zip,szip,country,scountry,status) VALUES('$name','$sname','$email','$proname','$proqty','$semail','$city','$scity','$address','$saddress','$zip','$szip','$country','$scountry','Unpaid')");


		




	}

	




?>




<!DOCTYPE html>
<html>
<head>
<title>Online Car Selling: Your Order</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<script src=js/jquery-3.2.1.min.js></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src=js/custom.js></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body id="checkout-page">

	<?php include_once('header.php'); ?>

<div id="site">

	<?php include_once('header.php') ?>
	<header id="masthead">
		<h1><span class="tagline">From 2017</h1>
	</header>
	<div id="content">
		<h1>Your Order</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th class="item" scope="col">Item</th>
					<th class="qty" scope="col">Qty</th>
					<th class="price" scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total" name="sub-total">
				<strong>Total</strong>: <span id="stotal" name='stotal'></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<h2>Your Data</h2>
		 	<div id="user-details-content"></div>
		 </div>
		 
		 
		 
		 
<form id="paypal-form" action="" method="POST">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1" />
	<input type="hidden" name="business" value="" />
        
	<input type="hidden" name="currency_code" value="" />
	<input type="submit"  id="paypal-btn" class="btn" value="Pay with PayPal" />
</form>
		 
		 
	</div>
	
	

</div>


<?php  include_once('footer.php');   ?>

</body>
</html>	