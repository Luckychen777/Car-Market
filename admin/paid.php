<?php

 session_start();
 require_once('../config.php');

 if(!isset($_SESSION['admin'])){
        header('location: index.php');
        die();

    }

 if(isset($_POST['delete'])){

    $email = $_POST['email'];

    $delete = mysqli_query($connection,"DELETE FROM shipAddress WHERE email='$email'");
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
        <title>Paid Customers</title>
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
                    <h2 class="text-center " style="color:#000;">Paid Customers</h2>
                    <div class="short-line">
                        <hr>
                    </div>
                    <div class="table-area-2">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Product Name</th>
                                    <th>Product Quantity</th>
                                    <th>City</th>
                                    <th>Adress</th>
                                    <th>Zip</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <?php  
                                        $result = mysqli_query($connection,"SELECT  *FROM shipAddress  WHERE status='Paid'  ");
                                        

                                        while($profile= $result->fetch_assoc()) : ?>

                                <tbody>

                                    <tr>
                                        <td>
                                            <?php echo ("<b><u>Order Person Name</u></b>")." <br>". $profile['name'] ."<br> "."<b><u>Shipping</u></b>"."<br> " .$profile['sname'];  ?>

                                        </td>
                                        <td>
                                            <?php echo ("<b><u>Order Person Email</b></u>")." <br>". $profile['email'] ."<br> "."<b><u>Shipping Email</u></b>"." <br>" .$email=$profile['semail']  ?>
                                        </td>
                                        <td>
                                            <?php echo " <br>". '<b>'.$profile['proname'].'</b>'; ?>
                                        </td>
                                        <td>
                                            <?php echo " <br>". '<b>'.$profile['proqty'].'</b>'; ?>
                                        </td>
                                        <td>
                                            <?php echo ("<b><u>Order Person City</b></u>")." <br>". $profile['city'] ."<br> "."<b><u>Shipping City</u></b>"." <br>" .$profile['scity']  ?>
                                        </td>
                                        <td>
                                            <?php echo ("<b><u>Order Person Address</b></u>")." <br>". $profile['address'] ."<br> "."<b><u>Shipping Address</u></b>"." <br>" .$profile['saddress']  ?>
                                        </td>
                                        <td>
                                            <?php echo ("<b><u>Order Person Zip</b></u>")." <br>". $profile['zip'] ."<br> "."<b><u>Shipping Zip<u></b>"." <br>" .$profile['szip']  ?>
                                        </td>
                                        <td>
                                            <?php echo ("<b><u>Order Person Country</b></u>")." <br>". $profile['country'] ."<br> "."<b><u>Shipping Country<u></b>"." <br>" .$profile['scountry']  ?>
                                        </td>

                                        <td>
                                            <?php echo"<form action='' method='POST'>
                                                                                                        <input type='hidden' readonly='readonly' name='email' value='$email'>
                                                                                                        
                                                                                                        <input type='submit' value='Delete' class='btn-danger' name='delete'>
                                                                </form>" ?>
                                        </td>
                                        <td>
                                            <?php echo $profile['status'];   ?>
                                        </td>1

                                    </tr>
                                </tbody>
                                <?php endwhile; ?>
                        </table>
                    </div>
                </div>

            </div>
    </body>

    </html>