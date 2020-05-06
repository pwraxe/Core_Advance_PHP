<?php
	
	try{
		
		$connect = new PDO("mysql: host=localhost; dbname=app_online_practice","root","");
		echo "Connected<hr>";
		
		$connect->query("use app_online_practice");

		$insert_query = "DELETE FROM demo_table where id = 13456";
		$affected_rows = $connect->exec($insert_query);
		echo $affected_rows." row Deleted";
    
	}catch(PDOException $e){ echo $e->getMessage(); }


?>
