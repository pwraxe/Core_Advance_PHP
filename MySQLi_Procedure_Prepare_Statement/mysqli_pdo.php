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
	}

?>