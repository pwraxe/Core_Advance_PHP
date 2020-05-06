<?php
	// https://www.php.net/manual/en/pdo.drivers.php

	// for 	mysqli 		database : The DSN prefix is --> mysql: <--
	// for 	oracle 		database : The DSN prefix is --> oci: <--
	// for 	PostgreSQL	database : The DSN prefix is --> pgsql: <--
	// for 	PostgreSQL 	database : The DSN prefix is --> sqlite: <--


	$dsn = "mysql: host=localhost; dbname = app_online_practice";
	$user = "root";
	$pass = "";
	try{
	
		$conn = new PDO($dsn,$user,$pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo "Connected<hr>";

		// if this statement not writtern then thow erro "SQLSTATE[3D000]: Invalid catalog name: 1046 No database selected"
		$conn->query("use app_online_practice"); 

		$sql = "SELECT * FROM demo_table";
		$result = $conn->query($sql);

		//$row = $result->fetch();		                //  it fetch single data using id and column  
		//$row = $result->fetch(PDO::FETCH_ASSOC);	  //  it fetch data using column name
		//$row = $result->fetch(PDO::FETCH_LAZY);	    //  same like assoc and  query return 
		//$row = $result->fetch(PDO::FETCH_NUM);	    //  Fetch data using index
		//$row = $result->fetch(PDO::FETCH_OBJ);		  //  fetch object insted of array
		$row = $result->fetch(PDO::FETCH_PROPS_LATE); //  it fetch single data using id and column  		

		echo "<pre>",print_r($row),"</pre>";
    
	}catch(PDOException $e){
		echo "Not Connected : ".$e->getMessage();
	}

?>

<?php
/*
	if --> $row = $result->fetch();		|OR|	$row = $result->fetch(PDO::FETCH_BOTH);		
										                |OR| 	$row = $result->fetch(PDO::FETCH_PROPS_LATE);
	then output is :
		Array
		(
		    [id] => 1002
		    [0] => 1002
		    [name] => John
		    [1] => John
		    [email] => jp@gmail.com
		    [2] => jp@gmail.com
		    [mobile] => 123456789
		    [3] => 123456789
		)
		1 	

----------------------------------------------------------------------------------------

	if --> $row = result->fetch(PDO::FETCH_ASSOC);		|| $row = $result->fetch(PDO::FETCH_NAMED);
	then output is : 
		Array
		(
			[id] => 1002
			[name] => John
			[email] => jp@gmail.com
			[mobile] => 123456879
		)
		1

----------------------------------------------------------------------------------------
	
	if --> $row = $result->fetch(PDO::FETCH_LAZY);	
	then ouput is : 
		PDORow Object
		(
			[queryString] => SELECT * FROM demo_table
			[id] => 1002
			[name] => John
			[email] => jp@gmail.com
			[mobile] => 123456879
		)
		1

----------------------------------------------------------------------------------------	
	
	if --> $row = $result->fetch(PDO::FETCH_NUM);
	then output is :
		Array
		(
		    [0] => 1002
		    [1] => John
		    [2] => jp@gmail.com
		    [3] => 123456789
		)
		1
    
-----------------------------------------------------------------------------------------

	if --> $row = $result->fetch(PDO::FETCH_OBJ);	
	then output is : 
		stdClass Object
		(
		    [id] => 1002
			[name] => John
			[email] => jp@gmail.com
			[mobile] => 123456879
		)
		1 
-----------------------------------------------------------------------------------------



*/


?>
