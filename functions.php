<?php


	function emailExist(){
		require_once('config.php');
		global $connection;
		global $email;

		$emailChecker = mysqli_query($connection,"SELECT email FROM user WHERE email='$email'");

		if(mysqli_num_rows($emailChecker)==1){
			return true;
		}
	}
	function searchResult(){
		require_once('config.php');
		global $connection;
		global $email;

		$emailChecker = mysqli_query($connection,"SELECT email FROM shipAddress WHERE email='$email'");

		if(mysqli_num_rows($emailChecker)>=1){
			return true;
		}
	}



?>