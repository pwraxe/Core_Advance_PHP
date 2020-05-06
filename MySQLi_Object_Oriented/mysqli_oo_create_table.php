<?php
	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Unable to Connect");
	}
	echo "Connected <hr>";

	$sql = "CREATE TABLE xtable (
			id INT AUTO_INCREMENT PRIMARY KEY,
			name varchar(255),
			email varchar(255),
			mobile varchar(255) )";

 
	if($conn->query($sql) === TRUE){
		echo "Table Created";
	}else{
		echo "Error to create table";
	}
	$conn->close();


?>
