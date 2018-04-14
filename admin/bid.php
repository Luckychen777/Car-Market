<?php

	session_start();
 	require_once('../config.php');

 	if(!isset($_SESSION['admin'])){
      	header('location: index.php');
     	 die();

    }

 if(isset($_POST['delete'])){

    $email = $_POST['email'];

    $delete = mysqli_query($connection,"DELETE FROM bidpro WHERE email='$email'");
         if($delete){
            echo "<script>alert('Successfully Deleted')</script>";
         }
         else{
            echo "<script>alert('something went Wrong')</script>";
         }
 }

    if(isset($_POST['paid'])){
        $email = $_POST['email'];



    $update = mysqli_query($connection,"UPDATE bidpro SET status='Paid' WHERE email='$email'");

 
    // $insert = mysqli_query($connection,"INSERT INTO customerorder(name,sname,email,proname,proqty,semail,city,scity,address,saddress,zip,szip,country,scountry,status) SELECT name,sname,email,proname,proqty,semail,city,scity,address,saddress,zip,szip,country,scountry,status FROM  shipAddress WHERE email ='$email'");

    

    // if($insert){
    //  $delete = mysqli_query($connection,"DELETE FROM shipAddress WHERE email='$email'");

    //  if($delete){
    //      echo '<script>alert("Marked As Paid")</script>';
    //  }
    // }
        echo $fail = "<script>alert('Marked As Paid')</script>";
    

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>People Who Bid for Car </title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="../style.css"> -->
        <link rel="stylesheet" href="style.css">

        <script src=js/jquery-3.2.1.min.js></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src=js/custom.js></script>
</head>
<body>
	<?php include_once('header.php'); ?>
	<div class="contact-info text-center">
		<div class="container">
			<h2 class="text-center " style="color:#000;">People Who Placed Bid</h2>
                    <div class="short-line">
                        <hr>
                    </div>

                    <div class="table-area">
                    	<table class="table table table-bordered table table-responsive">
                    		<thead>
                    			<tr>
                    				<th>Price</th>
                    				<th>Email</th>
                                    <th>Status</th>
                                    <th>Brand</th>
                                    <th>CC</th>
                                    <th>Location</th>
                                    <th>Action</th>
                    				<th>Request</th>
                    			</tr>
                    		</thead>
                    		<?php 
                    		$result = mysqli_query($connection,"SELECT  *FROM bidpro ");
                    		while($profile= $result->fetch_assoc()) : ?>
                    		<tbody>
                    			<tr>
                    				
                                     <td><?php echo "<b>". $profile['price'] ."</b>"; ?></td>
                    				<td><?php echo $email=$profile['email']; ?></td>
                                    <td><?php echo "<b>". $profile['status'] ."</b>"; ?></td>
                                    <td><?php echo $profile['brand']; ?></td>
                                    <td><?php echo $profile['cc']; ?></td>
                                    <td><?php echo $profile['location']; ?></td>
                    				<td><?php echo"<form action='' method='POST'>
                                                                                                        <input type='hidden' readonly='readonly' name='email' value='$email'>
                                                                                                        
                                                                                                        <input type='submit' value='Delete' class='btn-danger' name='delete'>
                                                                </form>" ?></td>
                                                                  <td>
                                    <?php echo"<form action='' method='POST'>
                                                    <input type='hidden' name='email' readonly='readonly' value='$email'>
                                                    
                                                    <input type='submit' value='Mark As Paid' class='btn-primary' name='paid'>
                                                </form>" ?>
                                </td>
                    			</tr>
                              
                    		</tbody>

                    	<?php endwhile; ?>
                    	</table>
                    </div>
		</div>
	</div>
</body>
</html>