<?php
	
	$conn = mysqli_connect("localhost","root","","app_online_practice");
	if(!$conn){
		die("error to Connect".mysqli_connect_error());
	}else{

		$sql = "DELETE FROM demo_table WHERE id = ?";
		
		$result = mysqli_prepare($conn,$sql);

		if($result){
			$id = 3003; 
		
			mysqli_stmt_bind_param($result,'i',$id);
			
			mysqli_stmt_execute($result);

			echo mysqli_stmt_affected_rows($result) . " row deleted";

		}

	}
	mysqli_stmt_close($result);	// prepare statement close
	mysqli_close($conn);			// connection close
?>
