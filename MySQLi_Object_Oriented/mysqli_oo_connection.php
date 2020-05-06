<?php
	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Unable to Connect");
	}
	echo "Connected";

	$conn->close();
?>
