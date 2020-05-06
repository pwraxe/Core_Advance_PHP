<?php
	// https://www.php.net/manual/en/pdo.drivers.php

	// for 	mysqli 		database : The DSN prefix is --> mysql: <--
	// for 	oracle 		database : The DSN prefix is --> oci: <--
	// for 	PostgreSQL	database : The DSN prefix is --> pgsql: <--
	// for 	PostgreSQL 	database : The DSN prefix is --> sqlite: <--

	$conn = new PDO("mysql: host = localhost; dbname=mydb","root","");
	if($conn){
		echo "Connected";
	}else{
		echo "Error to Connect";
	}

---------------------------------------------------------------------------------------------------------------
	
	$data_source_name = "mysql: host = localhost; dbname=mydb";
	$user = "root";
	$password = "";
	
	$conn = new PDO($data_source_name,$user,$password);
	if($conn){
		echo "Connected";
	}else{
		echo "Error to Connect";
	}


?>
