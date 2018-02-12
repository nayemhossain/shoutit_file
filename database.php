<?php
$con = mysqli_connect("localhost", "root", "", "shoutit");
if(mysqli_connect_errno()){
	echo "faile connect:".mysqli_connect_error();
	}

?>