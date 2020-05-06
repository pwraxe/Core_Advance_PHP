<?php
	
	try{
		
		$connect = new PDO("mysql: host=localhost; dbname=app_online_practice","root","");
		echo "Connected<hr>";
		
		$connect->query("use app_online_practice");

		$insert_query = "INSERT INTO demo_table (id,name,email,mobile) VALUES(3003,'Akshay','example@gmail.com',1234567890)";
		$affected_rows = $connect->exec($insert_query);
		echo $affected_rows." rows inserted";

	}catch(PDOException $e){ echo $e->getMessage(); }


?>
