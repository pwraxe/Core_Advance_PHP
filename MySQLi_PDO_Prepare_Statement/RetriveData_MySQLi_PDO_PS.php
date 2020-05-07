==================================== PDO Retrive Data without binding  , PDO Prepare Statement ========================================

<?php

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




====================================================PDO PrepStmt-> Retrive Data Using Bind Data by Column || index===============================

<?php

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "SELECT * FROM demo_table";

		$result = $conn->prepare($sql);
		
		$result->execute();
    
    //  bind by index|| col number
		
    $result->bindColumn(1,$id);
		$result->bindColumn(2,$name);
		$result->bindColumn(3,$email);
		$result->bindColumn(4,$mobile);

		while($result->fetch(PDO::FETCH_BOUND)) {

			echo " ID 	 : ".$id."<br>";
			echo " Name  : ".$name."<br>";
			echo " Email : ".$email."<br>";
			echo " Mobile : ".$mobile."<br><br>";
		}
		unset($result);
		$conn = null;
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }

?>
 ==============================================PDO PrepStmt-> Retrive Data Using Bind Data by ColumnName =================================


<?php

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "SELECT * FROM demo_table";

		$result = $conn->prepare($sql);
		
		$result->execute();

		// Bind using Col name
		$result->bindColumn('id',$id);
		$result->bindColumn('name',$name);
		$result->bindColumn('email',$email);
		$result->bindColumn('mobile',$mobile);

		while($result->fetch(PDO::FETCH_BOUND)) {

			echo " ID 	 : ".$id."<br>";
			echo " Name  : ".$name."<br>";
			echo " Email : ".$email."<br>";
			echo " Mobile : ".$mobile."<br><br>";
		}
		unset($result);
		$conn = null;
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }

?>
 

