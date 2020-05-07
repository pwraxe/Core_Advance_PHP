===================================== Retrive Single Row by Positional Param using PDO Prepare Stmt====================================

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
====================================== Retrive Single Row by Named Param using PDO Prepare Stmt====================================
<?php

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "SELECT * FROM demo_table WHERE id = :id && mobile = :mobile";

		$result = $conn->prepare($sql);

		$id = 2001;
		$mobile = 112534684; 

		$result->bindParam(':id',$id);
		$result->bindParam(':mobile',$mobile);


		$result->execute();

		$row = $result->fetch(PDO::FETCH_ASSOC);
		echo " ID : ".$row['id']."<br> Name : ".$row['name']."<br> Email : ".$row['email']."<br> Mobile : ".$row['mobile']."<hr>";


		unset($result);
		$conn = null;
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }

?>


===================================================== PDO Prep. Stmt Fetch Single Row ==================================

<?php

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "SELECT * FROM demo_table WHERE id = :id && mobile = :mobile";

		$result = $conn->prepare($sql);

		$result->execute(array(':id'=>1235,':mobile'=>52554624875));	// OR	$result->execute([2001]);		

		$row = $result->fetch(PDO::FETCH_ASSOC);
		echo " ID : ".$row['id']."<br> Name : ".$row['name']."<br> Email : ".$row['email']."<br> Mobile : ".$row['mobile']."<hr>";

		unset($result);
		$conn = null;
	}catch(PDOException $e){ echo "Error : ".$e->getMessage(); }

?>



<?php
/*


if
	$sql = "SELECT * FROM demo_table WHERE id = ?";
then	
	$result->bindParam(1,$id);     OR     $result->execute(array(1235)); 	OR	$result->execute([2001]);		


--------------------------------------------------------------------------------------------------------------------------

if
	$sql = "SELECT * FROM demo_table WHERE id = ? && name = ?";
then	
	$result->bindParam(1,$id);
	$result->bindParam(2,$name);
			OR
	$result->execute([2001, 112534684]);

--------------------------------------------------------------------------------------------------------------------------


if
	$sql = "SELECT * FROM demo_table WHERE id = :id";
then
	$result->execute(array(':id'=>1235));



*/

?>











