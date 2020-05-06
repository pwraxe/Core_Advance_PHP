<?php
	
	$conn = mysqli_connect("localhost","root","","app_online_practice");
	if(!$conn){
		die("error to Connect".mysqli_connect_error());
	}else{

		$sql = "UPDATE demo_table SET name = ?, email = ?, mobile = ? where id = ?";
		$result = mysqli_prepare($conn,$sql);

		if($result){

			$id = 2001;
			$name = "William Richard";
			$email = "willrich@gmail.com";
			$mobile = 112534684;

			mysqli_stmt_bind_param($result,'ssii',$name, $email, $mobile, $id);	// ssii = String String Int Int , It is sequence of data we send

			mysqli_stmt_execute($result);

			echo "Updated";
		}
	}
	mysqli_stmt_close($result);	// prepare statement close
	mysqli_close($conn);			// connection close
?>
