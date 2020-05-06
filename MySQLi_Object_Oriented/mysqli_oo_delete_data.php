<?php
	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Unable to Connect");
	}
	echo "Connected <hr>";

	$sql = "DELETE FROM demo_table where id = 1003";
 
	if($conn->query($sql) === TRUE){
		echo "Record Deleted";
	}else{
		echo "Error to Delete Data";
	}
	$conn->close();
?>
