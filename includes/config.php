<?php
	ob_start();// sends data into pieces to the server

	$timezone = date_default_timezone_set("Asia/Kolkata");

	$con = mysqli_connect("localhost", "root", "","geet");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}

?>