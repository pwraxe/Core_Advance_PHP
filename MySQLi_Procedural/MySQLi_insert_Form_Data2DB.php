<?php

	$connect = mysqli_connect("localhost","root","","app_online_practice");
	if(!$connect){
		die("Unable to Connect ".mysqli_connect_error());
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Store Custom Data in DB</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
	</head>
<body>




	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<form method="POST">
					<div class="form-group">
						<label>ID : </label>
						<input type="number" name="id" class="form-control">
						
						<label>Name : </label>
						<input type="text" name="fname" class="form-control">
						
						<label>Email : </label>
						<input type="email" name="email" class="form-control">
						
						<label>Mobile : </label>
						<input type="number" name="mobile" class="form-control"><br>

						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>		
	</div>

	<?php

		if(isset($_REQUEST['submit'])){
			$id = $_REQUEST['id'];
			$name = $_REQUEST['fname'];
			$email = $_REQUEST['email'];
			$mobile = $_REQUEST['mobile'];

			if($id == "" || $name == "" || $email == "" || $mobile == ""){
				echo "Please Fill all fields";
			}else{
				$sql = "INSERT INTO demo_table (id,name,email,mobile) VALUES('$id','$name','$email','$mobile')";

				if(mysqli_query($connect,$sql)){
					echo "Data Inserted Sucessfully";
				}else{
					echo "Errro to Insert Data";
				}

			}
		}

	?>

</body>
</html>
