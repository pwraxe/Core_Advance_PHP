<?php

    $conn = new mysqli("localhost","root","");
    if($conn->connect_error){
        die("Can't Connect to Database");
    }else{
        $create_db = "create database xdatabase";
        if($conn->query($create_db) === TRUE)
            echo "Database Created <hr>";
        else
            echo "Error to Create Database";

        if($conn->query("use xdatabase") === TRUE)
            echo "database selected<hr>";
        else
            echo "unable to select db";

        $table = "CREATE TABLE myTable (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name varchar(255),
        email varchar(255),
        mobile varchar(255) )";

        if($conn->query($table) === TRUE)
            echo "Table created";
        else
            echo "Can't Create Table";
    }
    $conn->close();

?>
