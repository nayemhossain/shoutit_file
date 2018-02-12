<?php
include "database.php";

if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con,$_POST['user']);
	$message = mysqli_real_escape_string($con,$_POST['message']);
	date_default_timezone_set('Europe/Berlin');
	$time = date('h:i:s a',time());
	if(!isset($user) || $user=='' || !isset($message) || $message==''){
		$error = "please fill in your name and a message";
		header("Location: index.php?error=".urlencode($error));
		}else{
			$query = "INSERT INTO shouts VALUES(NULL,'$user','$message', NOW())";
			if(!mysqli_query($con, $query)){
				die('Error: '.mysqli_error($con));
				}else{
					header("Location: index.php");
					exit();
				}
			}
}

?>