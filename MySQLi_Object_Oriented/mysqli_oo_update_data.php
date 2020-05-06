<?php
	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Unable to Connect");
	}
	echo "Connected <hr>";

	$sql = "UPDATE demo_table SET name = 'John Doe', email = 'john@gmail.com', mobile='965412387' where id=13456 ";
 
	if($conn->query($sql) === TRUE){
		echo "Record Updated";
	}else{
		echo "Error to Update Data";
	}
	$conn->close();


?>
