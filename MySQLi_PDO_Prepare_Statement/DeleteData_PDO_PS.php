
==============================================================================================================================
//-------------------------PDO Prepare Statement : Delete Data using named parameter with binding-------------------------------

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "DELETE FROM demo_table WHERE id = :id";
		
		$result = $conn->prepare($sql);

		$id = 7777;
		$result->bindParam(':id',$id, PDO::PARAM_INT);

		$result->execute();
		

		echo $result->rowCount()." row Deleted";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}

==============================================================================================================================
//-------------------------PDO Prepare Statement : Delete Data using named parameter without binding---------------------------

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "DELETE FROM demo_table WHERE id = :id";
		$result = $conn->prepare($sql);

		$id = 5555;	
		$result->execute(array(':id'=>$id));
		

		echo $result->rowCount()." row Deleted";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}
