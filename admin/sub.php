<?php

	session_start();
 	require_once('../config.php');

 	if(!isset($_SESSION['admin'])){
      	header('location: index.php');
     	 die();

    }

 if(isset($_POST['delete'])){

    $email = $_POST['email'];

    $delete = mysqli_query($connection,"DELETE FROM subs WHERE email='$email'");
         if($delete){
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
		<title>Subscriber </title>
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
			<h2 class="text-center " style="color:#000;">Subscriber</h2>
                    <div class="short-line">
                        <hr>
                    </div>

                    <div class="table-area">
                    	<table class="table table table-bordered table table-responsive">
                    		<thead>
                    			<tr>
                    				<th>Name</th>
                    				<th>Email</th>
                    				<th>Daily News</th>
                    				<th>Action</th>
                    			</tr>
                    		</thead>
                    		<?php 
                    		$result = mysqli_query($connection,"SELECT  *FROM subs ");
                    		while($profile= $result->fetch_assoc()) : ?>
                    		<tbody>
                    			<tr>
                    				<td><?php echo $profile['name']; ?></td>
                    				<td><?php echo $email=$profile['email']; ?></td>
                    				<td><?php echo $profile['role']; ?></td>
                    				<td><?php echo"<form action='' method='POST'>
                                                                                                        <input type='hidden' readonly='readonly' name='email' value='$email'>
                                                                                                        
                                                                                                        <input type='submit' value='Ban User' class='btn-danger' name='delete'>
                                                                </form>" ?></td>
                    			</tr>
                    		</tbody>

                    	<?php endwhile; ?>
                    	</table>
                    </div>
		</div>
	</div>
</body>
</html>