<?php

	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Could not Connect to Database");
	}else{
		echo "Connected to Database<hr>";

		$sql = "INSERT INTO demo_table (id, name, email, mobile) VALUES(?, ?, ?, ?)";
		
		$result = $conn->prepare($sql);

		$id = 1234;
		$name = "Michel Johnson";
		$email= "mj@gmail.com";
		$mobile = 52554624875;

		$result->bind_param('issi',$id,$name,$email,$mobile);

		$result->execute();

		echo $result->affected_rows ." Inserted";	// return 1 on success and return -1 on failuar

		$result->close();

		$conn->close();
		
	}
?>
============================================= BETTER APPROCH ===========================================================

<?php

	$conn = new mysqli("localhost","root","","app_online_practice");
	if($conn->connect_error){
		die("Could not Connect to Database");
	}else{
		echo "Connected to Database<hr>";

		$sql = "INSERT INTO demo_table (id, name, email, mobile) VALUES(?, ?, ?, ?)";

		$result = $conn->prepare($sql);
		if($result){
			
			$id = 1235;
			$name = "Michel Johnson";
			$email= "mj@gmail.com";
			$mobile = 52554624875;

			$result->bind_param('issi',$id,$name,$email,$mobile);

			$result->execute();

			// return 1 on success and return -1 on failuar
			echo $result->affected_rows ." Inserted";	
		}

		$result->close();
		$conn->close();
	}
?>
