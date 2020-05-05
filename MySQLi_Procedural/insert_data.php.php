<?php 

	$connect = mysqli_connect("localhost","root","","app_online_practice");

    if(!$connect){
   		die("Error to Connect -> ".mysqli_connect_error());
	}else{
		$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES('2001','Sam Zaa','sam@gmail.com','1234567890')";
		if(mysqli_query($connect,$sql)){
			echo "Inserted";
		}else{
			echo "Not Inserted";
		}
	}
?>