<?php

session_start();
 require_once('../config.php');

 if(!isset($_SESSION['admin'])){
	    header('location: index.php');
	    die();

	}

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if(isset($_POST['post'])){
		$brand = $_POST['brand'];
		$loc   = $_POST['location'];
		$cc    = $_POST['cc'];

		$randid = rand(1,100).rand(1,100);
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    	if($check !== false) {
	        	 "File is an image - " . $check["mime"] . ".";
	        	$uploadOk = 1;
	        	echo '<script>alert("Images Uploaded")</script>';
	    	} 
	    	else {
	        	echo '<script>alert("File is not an image.")</script>';
	        	$uploadOk = 0;
	    }
	    if (file_exists($target_file)) {
  echo '<script>alert("File Already Exist.Rename it")</script>';
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo '<script>alert("Sorry, your file is too large.")</script>';
    $uploadOk = 0;
}
	    if ($uploadOk == 0) {
   echo'<script>alert("Sorry File Was Not Uploaded")</script>';

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<script>alert("The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.")</script>';
    } else {

        header('location: carnew.php');
         echo'<script>alert("Sorry File Was Not Uploaded")</script>';
    }
}

	$insert = mysqli_query($connection,"INSERT INTO oldcar(brand,location,cc,image,randid) VALUES('$brand','$loc','$cc','$target_file','$randid')");

	if($insert === TRUE){
		echo '<script>alert("Your Information Has Been Saved")</script>';
		echo '<script>window.open("carnew.php","_self")</script>';
	}
	}

?>

