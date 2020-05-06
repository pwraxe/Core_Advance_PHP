<?php
	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Unable to Connect");
	}
	echo "Connected <hr>";

	$sql = "CREATE DATABASE xdb";
 
	if($conn->query($sql) === TRUE){
		echo "Database Created";
	}else{
		echo "Error to Create Database";
	}
	
	$conn->close();

?>
