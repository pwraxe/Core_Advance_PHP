<?php

	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Could not Connect to Database");
	}else{
		echo "Connected to Database<hr>";

		$sql = "UPDATE demo_table SET name = ?, email = ?, mobile = ? WHERE id = ?";

		$result = $conn->prepare($sql);
		if($result){

			$id = 2002;
			$name = "Anurag Mishra";
			$email = "anurag@gmail.com";
			$mobile = "75412365487";

			$result->bind_param('ssii',$name,$email,$mobile,$id);

			$result->execute();

			// return 1 on success and return -1 on failuar
			echo $result->affected_rows ."Row UPDATED";	
			
		}

		$result->close();
		$conn->close();
		
	}
?>

