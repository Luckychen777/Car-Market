<?php
session_start();
 require_once('../config.php');

 if(!isset($_SESSION['admin'])){
	    header('location: index.php');
	    die();

	}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Add New Car</title>
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

    <body class="add">
        <?php require_once('header.php'); ?>

            <div class="new-car">
                <div class="container">
                    <h2 class="text-center">Add New Car to BID Option</h2>

                    <div class="form-area">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <!-- .. here .. -->

                            <select name="brand" class="form-control">
                                <option value="">Type</option>
                                <option value="BIKE">BIKE</option>
                                <option value="BMW">BMW</option>
                                <option value="AUDI">AUDI</option>
                                
                            </select>
                            <select name="location" class="form-control">
                                <option value="">Location</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="New York">New York</option>
                                
                            </select>
                            <select name="cc" class="form-control">
                                <option value="">CC</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                            </select>

                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            <br>File to upload:
                            <br>
                            <input type="file" name="fileToUpload" id="fileToUpload">

                            <input type="submit" value="Submit" name="post" class="form-control">

                        </form>
                    </div>

                </div>
            </div>
    </body>

    </html>