<?php

	$connection = mysqli_connect("localhost","root","","app_online_practice");
	if(!$connection){
		die("Unable to Connect to Database".mysqli_connect_error());
	}else{

		$sql = "DELETE FROM demo_table WHERE id = 3001";
		if(mysqli_query($connection,$sql)){
			echo "Record Deleted Successfully";
		}else{
			echo "Error to Delete Data";
		}
	}
?>
