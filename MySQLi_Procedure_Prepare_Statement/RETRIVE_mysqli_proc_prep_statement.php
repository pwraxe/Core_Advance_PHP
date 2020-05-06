======================================RETRIVE ALL DATA=====================================================

<?php
	$conn = mysqli_connect("localhost","root","","app_online_practice");
	if(!$conn){
		die("error to Connect".mysqli_connect_error());
	}else{

		$sql = "SELECT * FROM demo_table";

		//Prepare Statement
		$result = mysqli_prepare($conn,$sql);

		// bind result set in variable
		mysqli_stmt_bind_result($result, $id, $name, $email, $mobile);

		// execute prepare statement
		mysqli_stmt_execute($result);

		while(mysqli_stmt_fetch($result)){
			echo $id . " | ".$name." | ". $email ." | ".$mobile."<br/>";
		}
		mysqli_stmt_close($result);	// prepare statement close
		mysqli_close($conn);			// connection close
	}

?>

====================================RETRIVE SINGLE DATA=======================================================


<?php
	
	$conn = mysqli_connect("localhost","root","","app_online_practice");
	if(!$conn){
		die("error to Connect".mysqli_connect_error());
	}else{

		$id = 1002;
		$sql = "SELECT * FROM demo_table where id = ?";

		$result = mysqli_prepare($conn,$sql);
		
		mysqli_stmt_bind_param($result,'i',$id);
		mysqli_stmt_bind_result($result, $id, $name, $email, $mobile);

		mysqli_stmt_execute($result);

		while(mysqli_stmt_fetch($result)){
			echo $id . " | ".$name." | ". $email ." | ".$mobile."<br/>";
		}
		mysqli_stmt_close($result);	// prepare statement close
		mysqli_close($conn);			// connection close
	}

?>
