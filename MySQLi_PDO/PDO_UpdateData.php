<?php
	

	try{
		
		$connect = new PDO("mysql: host=localhost; dbname=app_online_practice","root","");
		echo "Connected<hr>";
		
		$connect->query("use app_online_practice");

		$insert_query = "UPDATE demo_table SET name='Akshay Kumar' , email = 'akshay@gmail.com' , mobile='1112223330' where id = 3003";
		$affected_rows = $connect->exec($insert_query);
		echo $affected_rows." row Updated";



	}catch(PDOException $e){ echo $e->getMessage(); }


?>
