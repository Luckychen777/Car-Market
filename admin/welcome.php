<?php

session_start();
 require_once('../config.php');

 if(!isset($_SESSION['admin'])){
	    header('location: index.php');
	    

	}
    if(isset($_POST['delete'])){
        $email = $_POST['demail'];

         $delete = mysqli_query($connection,"DELETE FROM contact WHERE email='$email'");
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
        <title>Admin Panel</title>
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

            <div class="welcome-contnet col-md-12 col-sm-12">
                <div class="image-noise">

                    <div class="container">
                        <h2 class="text-center">Hello Admin ! Manage Your Website From Admin Panel</h2>
                        <div class="short-line">
                            <hr>
                        </div>
                    </div>

                </div>
            </div>

            <div class="contact-info text-center">
                <div class="container">
                <h2 class="text-center " style="color:#000;">Contact Information</h2>
                <div class="short-line">
                    <hr>
                </div>
                <div class="table-area">
                    <table class="table table-responsive">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Sms</th>
                                <th>Action</th>
                            </tr>
                    <?php  
					$result = mysqli_query($connection,"SELECT *FROM contact");

					while($profile= $result->fetch_assoc()) : ?>

                        

                            <tr>
                                <td>
                                    <?php echo $profile['name']  ?>
                                   
                                </td>
                                <td>
                                    <?php echo $em=  $profile['email']  ?>
                                </td>
                                <td>
                                    <textarea readonly="readonly" cols="30" rows="3">
                                        <?php echo $profile['sms']  ?>
                                    </textarea>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="hidden" name="demail" placeholder="Email" required="required" value="<?php echo $em;  ?>">
                                        <input type="submit" value="Delete" name="delete" class='btn btn-danger'>
                                    </form>
                            </td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                </div>
                </div>

            </div>

    </body>

    </html>