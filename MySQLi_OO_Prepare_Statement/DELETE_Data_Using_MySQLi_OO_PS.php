<?php

	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Could not Connect to Database");
	}else{
		echo "Connected to Database<hr>";

		$sql = "DELETE FROM demo_table WHERE id = ?";

		$result = $conn->prepare($sql);
		if($result){

			$id = 1234;
			$result->bind_param('i',$id);

			$result->execute();

			// return 1 on success and return -1 on failuar
			echo $result->affected_rows ."Row Deleted";	
			
		}

		$result->close();
		$conn->close();
		
	}
?>

