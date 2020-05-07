<?php

	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Could not Connect to Database");
	}else{
		echo "Connected to Database<hr>";

		$sql = "SELECT * FROM demo_table WHERE id = ?";

		$result = $conn->prepare($sql);
		
		$id = 1002; 
		$result->bind_param('i',$id);

		$result->bind_result($id,$name, $email, $mobile);
		$result->execute();

		$result->fetch();
		echo " ID : $id <br> Name : $name <br> Email : $email <br> Mobile : $mobile <br><br>";
	}
?>
