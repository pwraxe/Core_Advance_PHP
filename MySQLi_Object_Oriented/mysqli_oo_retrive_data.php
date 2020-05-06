<?php
	$conn = new mysqli("localhost","root","","mydb");
	if($conn->connect_error){
		die("Unable to Connect");
	}
	echo "Connected <hr>";

	$sql = "SELECT * FROM mytable";
	$result = $conn->query($sql);

	$total_rows_in_table = $result->num_rows;

	if($total_rows_in_table > 0){
		while ($row = $result->fetch_assoc()) {
			echo " ID : ".$row['id']."<br>";
			echo " Name : ".$row['name']."<br>";
			echo " Email : ".$row['email']."<br>";
			echo " Mobile : ".$row['mobile']."<br><br><br>";
		}
	}else{
		echo "No Record Found :(";
	}
	$conn->close();

?>
