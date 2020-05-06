<?php

	$conn = new mysqli("localhost","root","","mydb");

    if($conn->connect_error){
		die("Unable to Connect");
	}
	
    echo "Connected <hr>";

	$sql = "INSERT INTO mytable (id,name,email,mobile) VaLUES('1001','Akshay Pawar','pawarakshay13@gmail.com','9657513437')";

	if($conn->query($sql) === TRUE){
		echo "Record Inserted";
	}else{
		echo "Error to Insert Data";
	}

?>
