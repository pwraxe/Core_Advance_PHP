<?php
	// https://www.php.net/manual/en/pdo.drivers.php

	// for 	mysqli 		database : The DSN prefix is --> mysql: <--
	// for 	oracle 		database : The DSN prefix is --> oci: <--
	// for 	PostgreSQL	database : The DSN prefix is --> pgsql: <--
	// for 	PostgreSQL 	database : The DSN prefix is --> sqlite: <--

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "SELECT * FROM demo_table";

		$result = $conn->prepare($sql);

		$result->execute();

		while($row = $result->fetch(PDO::FETCH_ASSOC)) {

			echo " ID 	 : ".$row['id']."<br>";
			echo " Name  : ".$row['name']."<br>";
			echo " Email : ".$row['email']."<br>";
			echo " Mobile : ".$row['mobile']."<br><br>";
		}
		unset($result);
		$conn = null;
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }
?>
