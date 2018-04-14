<!DOCTYPE html>
<html>
<head>
<title>Online Car website</title>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<script src=js/jquery-3.2.1.min.js></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src=js/custom.js></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body>

<?php include_once('header.php'); ?>

<div class="my-container">
	<div id="site">
	
	<div id="content">
		<div id="products">
			<ul>
				<li>
					<div class="product-image">
						<img src="images/car/bmw.jpeg" alt="bmw" />
					</div>
					<div class="product-description" data-name="BMW" data-price="70000">
						<h3 class="product-name">BMW</h3>
						<p class="product-price">&euro; 70000</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
				
				<li>
					<div class="product-image">
						<img src="images/car/ford.jpeg" alt="Ford" />
					</div>
					<div class="product-description" data-name="Ford" data-price="50000">
						<h3 class="product-name">Ford</h3>
						<p class="product-price">&euro; 50000</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
				
				<li>
					<div class="product-image">
						<img src="images/car/land.jpeg" alt="Land Rover" />
					</div>
					<div class="product-description" data-name="Land-rover" data-price="45000">
						<h3 class="product-name">Land Rover</h3>
						<p class="product-price">&euro; 45000</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
				
				<li>
					<div class="product-image">
						<img src="images/car/motor1.jpg" alt="Motor 1" />
					</div>
					<div class="product-description" data-name="Motor-1" data-price="5000">
						<h3 class="product-name">Motor 1</h3>
						<p class="product-price">&euro; 5000</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>


				<li>
					<div class="product-image">
						<img src="images/car/motor2.jpg" alt="Motor 2" />
					</div>
					<div class="product-description" data-name="Motor-2" data-price="45000">
						<h3 class="product-name">Motor 2</h3>
						<p class="product-price">&euro; 45000</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>

				<li>
					<div class="product-image">
						<img src="images/car/motor3.jpg" alt="Motor 3" />
					</div>
					<div class="product-description" data-name="Moto- 3" data-price="45000">
						<h3 class="product-name">Motor 3</h3>
						<p class="product-price">&euro; 45000</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>

				
			</ul>
		</div>
	</div>
	
	

</div>

</div>

<?php  include_once('footer.php');   ?>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>	