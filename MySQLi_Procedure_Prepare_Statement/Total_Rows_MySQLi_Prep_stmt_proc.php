<?php
	
	$conn = mysqli_connect("localhost","root","","app_online_practice");
	if(!$conn){
		die("error to Connect".mysqli_connect_error());
	}else{

		$sql = "SELECT * FROM demo_table";

		$result = mysqli_prepare($conn,$sql);
		
		$a = mysqli_stmt_execute($result);	// $a store's 1
		echo "aa = $a<hr>";

		$b = mysqli_stmt_store_result($result);	// $b store's 1
		echo "bb = $b<hr>";

		$total_row = mysqli_stmt_num_rows($result);
		echo $total_row;							// -----> return total number of rows in table

		mysqli_stmt_free_result($result);
	}
	mysqli_stmt_close($result);	// prepare statement close
	mysqli_close($conn);			// connection close
?>  
