
===============================================================================================================================
--------------------------------PDO Prepare Statement : Update Data with named Param. with Binding-----------------------------

	try{

		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "UPDATE demo_table SET name=:name, email = :email, mobile = :mobile WHERE id = :id";

		$result = $conn->prepare($sql);

		$id = 5001;
		$name = "John Doe";
		$email = "john@gmail.com";
		$mobile = 421325632;

		$result->bindParam(':name',$name,PDO::PARAM_STR);
		$result->bindParam(':email',$email,PDO::PARAM_STR);
		$result->bindParam(':mobile',$mobile,PDO::PARAM_INT);
		$result->bindParam(':id',$id,PDO::PARAM_INT);

		$result->execute();
		

		echo $result->rowCount()." row Updated";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}


===============================================================================================================================
--------------------------------PDO Prepare Statement : Update Data with named Param. without Binding-------------------------


	try{
		$conn = new PDO("mysql: host = localhost; dbname = app_online_practice", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected...<hr>";

		// select database  // if you are not write this then exception occure
		($conn->prepare("use app_online_practice"))->execute();

		$sql = "UPDATE demo_table SET name=:name, email = :email, mobile = :mobile WHERE id = :id";

		$result = $conn->prepare($sql);

		$name = "William Fox";
		$result->execute(array(':id'=>2001,':name'=>$name,':email'=>"will@gmail.com",':mobile'=>75421365241));		// this statement mean you can put direct data or hardcoaded data in array, in both way it works
		

		echo $result->rowCount()." row Updated";


	}catch(PDOException $e) { echo "Error : ".$e->getMessage();}
