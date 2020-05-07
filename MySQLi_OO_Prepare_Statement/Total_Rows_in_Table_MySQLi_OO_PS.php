<?php

	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Could not Connect to Database");
	}else{
		echo "Connected to Database<hr>";

		$sql = "SELECT * FROM demo_table";
		$result = $conn->prepare($sql);

		$result->execute();

		//getting total number of rows 
		$result->store_result();
		echo "Total Rows : ".$result->num_rows;
		$result->free_result();
	}
?>
