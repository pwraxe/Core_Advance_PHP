<?php 

	
	    $connect = mysqli_connect("localhost","root","","app_online_practice");
	    if(!$connect){
		    die("Error to Connect -> ".mysqli_connect_error());
    	}else{
		    $sql = "SELECT * FROM demo_table";
		    $result = mysqli_query($connect,$sql);
		    while($row = mysqli_fetch_assoc($result)){
			    echo "ID : ".$row['id']."<br>";
			    echo "Name : ".$row['name']."<br>";
			    echo "Email : ".$row['email']."<br>";
			    echo "Mobile : ".$row['mobile']."<br><br>";
		    }
	    }


?> 