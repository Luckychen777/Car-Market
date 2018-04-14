<?php
	require_once('config.php');


	if(isset($_POST['info_pass'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sms = $_POST['sms'];


		$insert = mysqli_query($connection,"INSERT INTO contact (name,email,sms) VALUES('$name','$email','$sms')");
		echo mysqli_error($connection);
		if($insert){
			
			echo "<script>alert('Thank You.We Got Your Message')</script>";
			
		}
	}




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buy Car.</title>
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

	<div class="overlay">
		<div class="container">
			<?php include_once('susbscrive.php'); ?>
		</div>
	</div>
	<!-- ... slider area ... -->

	 <div class="slide">
		  <img class="mySlides" src="images/banner/1.jpeg" style="width:100%">
		  <img class="mySlides" src="images/banner/bg.jpg" style="width:100%">
		  
	</div>
	
	<!-- ... end .... -->

	<div class="slider-area">
		
			<div class="container">
			<div class="image-noise">
			<div class="slider-contnet">
				<h3>Ultimate Price Transperacy</h3>
				<h5>From here you can buy car within your budget</h5>

				<div class="btn-group text-center col-md-12 col-sm-12 colxs-12 text-center">
					<div class="row text-center" style="margin:auto;">
						<div class="btn-area col-md-12 col-sm-12 col-xs-12">
							<a href="shop.php">Browse New Car</a>
						</div>
						<div class="btn-area col-md-12 col-sm-12 col-xs-12">
							<a href="allcar.php" style="background-color:#F47410">Browse  Old Car</a>
						</div>
					</div>
				</div>

				<div class="down-btn text-center">
					<div class="container">
						<a href="#bid"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
					</div>
				</div>


			</div>
		</div>
		</div>
	</div>

	<div class="my-filter">
		<div class="container">
			<div class="my-form" id="bid">
				<h2 class="text-center" style="color:#fff;">Search A Perfect Car for You</h2>
				<form action="bid.php" method="GET">
					<div class="row col-md-12 col-sm-12 col-xs-12">
						<select  name="brand" class="col-md-4 col-sm-4 col-xs-6 form-control" >
							<option value="">Type</option>
							<option value="BIKE">BIKE</option>
							<option value="BMW">BMW</option>
							<option value="AUDI">AUDI</option>
						</select>
						<select  name="location" class="col-md-4 col-sm-4 col-xs-6 form-control" >
							<option value="">Location</option>
							<option value="Dhaka">Dhaka</option>
							<option value="New York">New York</option>
							<!-- <option value="ALL">All</option> -->
						</select>
						<select name="cc" class="col-md4 col-sm-4 col-xs-6 form-control">
							<option value="">CC</option>
							<option value="100">100</option>
							<option value="150">150</option>
							<option value="200">200</option>
						</select>
						<br>
						<br>
						<input type="submit" value="Search" name='find' class=" btn-primary text-center col-md-3 col-sm-3 col-xs-6 ">
					</div>
				</form>
			</div>
		</div>
	</div>



	<section class="category-product">
		<div class="container">
			<div class="section-header text-center" id="stepdown">
				<h2 style="color:#000">Brands</h2>
				<div class="short-line">
					<hr>
				</div>
			</div>
			<div class="section-contnet col-md-12 col-sm-12 col-xs-12">
				<div class="row text-center">
					<div class="car-cate col-md-3 col-sm-6 col-xs-12 text-center">
						<img class="img-responsive col-md-12 col-sm-12 col-xs-12" src="images/bmw.svg" alt="bmw">
						<h3>BMW</h3>
					</div>

					<div class="car-cate col-md-3 col-sm-6 col-xs-12">
						<img class="img-responsive col-md-12 col-sm-12 col-xs-12" src="images/ford.png" alt="Ford">
						<h3>FORD</h3>
					</div>
					<div class="car-cate col-md-3 col-sm-6 col-xs-12">
						<img class="img-responsive col-md-12 col-sm-12 col-xs-12" src="images/land.png" alt="LAND ROVER">
						<h3>LAND ROVER</h3>
					</div>

					<div class="car-cate col-md-3 col-sm-6 col-xs-12">
						<img class="img-responsive col-md-12 col-sm-12 col-xs-12" src="images/20.jpg" alt="other">
						<h3>Other 20+ Brands</h3>
					</div>
				</div>


				<div class="cate-button text-center" style="margin:auto">
					<a href="shop.php" style="margin:auto" class="btn btn-primary btn-lg" role="button">Browse Shop</a>
				</div>


			</div>
		</div>
	</section>


	<section class="about-us">
		<div class="image-noise">
		<div class="container">
			<div class="section-header text-center" >
				<h2>About Us</h2>
				<div class="short-line" id="about">
					<hr>
				</div>
			</div>

			<div class="row col-md-12 col-sm-12 col-xs-12">

				<div class="about-contnet col-md-6 col-sm-12 col-xs-12">
					<p>We are car celling company . we sell Brand New cars with geniune license .we also sell old car.In our website you can purchase for new car and if you want a card in cheap price then we have recondition car for you with 1 year gurranty</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				</div>

				<div class="extra-content col-md-6 col-sm-12 col-xs-12">
					<div id="accordion">
						<h3 style="color:#000">Is This site is 100% safe for payment?</h3>
						<p>Yes. You can purhcase here without being worried. No Bullshit Here</p>

						<!-- .... accordion 2 ... -->
						<h3 style="color:#000">Can i get my money back ?</h3>
						<p>If you are not satisfy with out products then you will get <b>100% refund</b></p>

						<!-- ... accodio 3 ... -->
						<h3 style="color:#000">Can you guys provide car for middle class family</h3>
						<p>You can find <b>recondition Car</b>which is very less price and you can afford</p>

					</div>
				</div>

			</div>
		</div>
	</div>
	</section>



	<section class="contact-us">
		<div class="container">
			<div class="section-header text-center" >
				<h2>Contact Us</h2>
				<div class="short-line" id="contact">
					<hr>
				</div>
			</div>

			<div class="row col-md-12 col-sm-12 col-xs-12">

				<div class="form-area col-md-8  col-sm-8 col-xs-12">
					<form action="" method="POST" class="con-form">
						<label for="name">Name<span>*</span></label>
						<input class="form-control" type="text" name="name" placeholder="Your Name" id="name" required="required">
						<label for="email">Email<span>*</span></label>
						<input class="form-control" type="email" name="email" id="email" placeholder="Email" required="required">
						<label for="sms">Your Thoughts<span>*</span></label>
						<textarea class="form-control " name="sms" id="sms" cols="30" rows="10" required="required" placeholder="Your Thoughts"></textarea>
						<input class="form-control btn-primary" type="submit" value="Submit" name="info_pass">
					</form>
					<?php
						if(isset($success)){
							echo $success;
						}
					?>
				</div>
				<div class="our-location col-md-4 col-sm-4 col-xs-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0983083934075!2d90.42334931498256!3d23.81510298455754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2z4Kao4Kaw4KeN4KalIOCmuOCmvuCmieCmpSDgpofgpongpqjgpr_gpq3gpr7gprDgp43gprjgpr_gpp_gpr8!5e0!3m2!1sbn!2sbd!4v1510216860513" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
		</div>
		</div>
	</section>


	<section class="web-area">
		<div class="image-noise">
					<div class="container">
						<h2 style="color:#fff">Our Collections</h2>
						<div class="short-line">
							<hr>
						</div>
						<div class="my-frame">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/2u_Tpuj1pZI" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
		</div>
	</section>


		<?php  include_once('footer.php');   ?>
        
<!-- Start of BotEngine (www.botengine.ai) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "5a1afd18e4bd4900067afc1c";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.botengine.ai/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of BotEngine code -->
        

</body>
</html>