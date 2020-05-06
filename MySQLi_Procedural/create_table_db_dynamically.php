<?php

	$connection = mysqli_connect("localhost","root","","app_online_practice");
	if(!$connection){
		die("Unable to Connect to Database".mysqli_connect_error());
	}else{

		$create_db = "CREATE DATABASE MyDB";
		if(mysqli_query($connection,$create_db))
			echo "Database Created Succesfully <hr>";
		else
			echo "Error to Create DB";

		if(mysqli_query($connection,"use MyDB"))
			echo "Database Selected <hr>";
		else
			echo "cant Select db";

		$table = "CREATE TABLE myTable (
			id INT AUTO_INCREMENT PRIMARY KEY,
			name varchar(255),
			email varchar(255),
			mobile varchar(255) )";


		if(mysqli_query($connection,$table))
			echo "Table created Succesfully";
		else
			echo "Error to Create Table";

	}	
?>
