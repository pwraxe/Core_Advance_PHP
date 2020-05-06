<?php
	
	$conn = mysqli_connect("localhost","root","","app_online_practice");
	if(!$conn){
		die("error to Connect".mysqli_connect_error());
	}else{

		$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES (?,?,?,?)";

		$result = mysqli_prepare($conn,$sql);

		$id = 5001;
		$name = 'aaaaaaa';
		$email = 'aa@gmail.com';
		$mobile = 9123546870;

		if($result){
			mysqli_stmt_bind_param($result,'issi',$id,$name,$email,$mobile);
			mysqli_stmt_execute($result);

			echo mysqli_stmt_affected_rows($result);
		}

	}
	mysqli_stmt_close($result);	// prepare statement close
	mysqli_close($conn);			// connection close
?>
