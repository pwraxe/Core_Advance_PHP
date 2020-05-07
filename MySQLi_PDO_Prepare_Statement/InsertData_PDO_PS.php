
<?php

================================================================================================================================================================================================
// ---------------------------------PDO  Prepare Statement : Insert Data in Simple Way (w/o Binding)-------------------------------------
	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES(?,?,?,?)";
		
		$result = $conn->prepare($sql);
		
		//$result->execute(array(4444,"Mile Jackson","mile@gmail.com",9879879874));			OR  

		$id = 5555;
		$name = "Harry Cim";
		$email = "harry@gmail.com";
		$mobile = 5421365214;

		$result->execute(array($id,$name,$email,$mobile));
		

		echo $result->rowCount()." row Inserted";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}





================================================================================================================================================================================================
// ---------------------------------PDO Prepare Statement : Insert Data with named parameter without Binding--------------------------------
	
	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES(:id,:name,:email,:mobile)";
		
		$result = $conn->prepare($sql);	

		//$result->execute(array(':id'=>1111,':name' => "Ravi Kumar", ':email' => "ravi@gmail.com",':mobile'=>112255446633));	OR

		$id = 7777;
		$name = "alex soun";
		$email = "alex@gmail.com";
		$mobile = 441122556633;
	
		$result->execute(array(':id'=>$id,':name' => $name, ':email' => $email,':mobile'=>$mobile));		
		

		echo $result->rowCount()." row Inserted";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}


================================================================================================================================================================================================
// ---------------------------------PDO  Prepare Statement : Insert Data Using Binding-------------------------------------
	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES(?,?,?,?)";

		$result = $conn->prepare($sql);

		
		$id = 8888;
		$name = "Just Dial";
		$email = "jd@gmail.com";
		$mobile = 8888888888;

		$result->bindParam(1,$id,PDO::PARAM_INT);		// PARAMETER_INTEGER
		$result->bindParam(2,$name,PDO::PARAM_STR);		// PARAMETER_STRING
		$result->bindParam(3,$email,PDO::PARAM_STR);
		$result->bindParam(4,$mobile,PDO::PARAM_INT);

		$result->execute();

		echo $result->rowCount() . " row Inserted";

		
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }


================================================================================================================================================================================================
// ---------------------------------PDO Prepare Statement : Insert Data with named parameter with Binding--------------------------------
	
	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES(:id,:name,:email,:mobile)";
		
		$result = $conn->prepare($sql);
		
		
		$id = 3333;
		$name = "Sonu Monu";
		$email = "sm@gmail.com";
		$mobile = 456789212;

		$result->bindParam(':id',$id,PDO::PARAM_INT);			// PARAMETER_INTEGER
		$result->bindParam(':name',$name,PDO::PARAM_STR);		// PARAMETER_STRING
		$result->bindParam(':email',$email,PDO::PARAM_STR);		// PARAMETER_STRING
		$result->bindParam(':mobile',$mobile,PDO::PARAM_INT);	// PARAMETER_INTEGER
		

		$result->execute();
		

		echo $result->rowCount()." row Inserted";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}


================================================================================================================================================================================================
?>
