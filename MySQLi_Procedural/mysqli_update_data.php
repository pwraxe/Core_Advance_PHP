<?php

	$connection = mysqli_connect("localhost","root","","app_online_practice");
	if(!$connection){
		die("Unable to Connect to Database".mysqli_connect_error());
	}else{

		$sql = "UPDATE demo_table SET name='Sanket Mirza', email='sanket121@gmail.com',mobile='987456321' where id = 2002 ";
		if(mysqli_query($connection,$sql)){
			echo "Record Updated Successfully";
		}else{
			echo "Error to Update Data";
		}
	}
?>
