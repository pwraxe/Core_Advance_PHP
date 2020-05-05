
// $connection = mysqli_connect(host, username, password, databaseName); 
	$connection  = mysqli_connect("localhost","root","","codexdroid");		// Connect your application to Database
	if($connection){
		echo "Connected";
	}else{
		echo "Fail to Connect";
	}


---------------------------------------------------------------------------------------------------------------

// In case if mysql server not start then
	$connection  = mysqli_connect("localhost","root","","codexdroid");
	if(!$connection){
		echo "Fail to Connect  ::-->  ".mysqli_connect_error();		// Fail to Connect ::--> No connection could be made because the target machine actively refused it.
	}else{
		echo "Connected";
	}

	echo "remian code";				// this will execute

----------------------------------------------------------------------------------------------------------------

// In case if mysql server not start then
	$connection  = mysqli_connect("localhost","root","","codexdroid");
	if(!$connection){
		die ("Fail to Connect  ::-->  ".mysqli_connect_error());		// Fail to Connect ::--> No connection could be made because the target machine actively refused it.
	}else{
		echo "Connected";
	}

	echo "remian code";				// this will not execute

----------------------------------------------------------------------------------------------------------------
****************************************************************************************************************    Recommand Code
	$connection  = mysqli_connect("localhost","root","","codexdroid");
	if(!$connection){
		die ("Fail to Connect  ::-->  ".mysqli_connect_error());		// Fail to Connect ::--> No connection could be made because the target machine actively refused it.
	}else{
		echo "Connected";
	}
----------------------------------------------------------------------------------------------------------------
****************************************************************************************************************
