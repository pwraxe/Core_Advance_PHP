<?php

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "SELECT * FROM demo_table WHERE id = ?";

		$result = $conn->prepare($sql);

		$id = 1002;
		$result->bindParam(1,$id);

		$result->execute();

		$row = $result->fetch(PDO::FETCH_ASSOC);
		echo " ID : ".$row['id']."<br> Name : ".$row['name']."<br> Email : ".$row['email']."<br> Mobile : ".$row['mobile']."<hr>";


		unset($result);
		$conn = null;
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }

?>

