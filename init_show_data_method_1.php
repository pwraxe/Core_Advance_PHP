<?php
	
	class Student{

		public $stud_id;
		public $stud_name;
		public $stud_email;
		public $stud_mobile;

		function init($id, $name, $email, $mobile){
			$this->stud_id = $id;
			$this->stud_name = $name;
			$this->stud_email = $email;
			$this->stud_mobile = $mobile; 
		}

		function show(){
			echo "$this->stud_id : $this->stud_name : {$this->stud_email} : {$this->stud_mobile} <br>";
		}
	}


	$stud = new Student;
	$stud->init(1001,"aaaaaa","example@gmail.com",9874563210);			// send data sequentially   > works
	$stud->show();

	$s2 = new Student;
	$s2->init("Name",2002,123467890,"email@gmail.com");				// send data with mismatch sequence   > works
	$s2->show();

	$s3 = new Student;
	$s3->stud_id = 8888;
	$s3->stud_name = "abc";
	$s3->stud_email = "abc@gmail.com";
	$s3->stud_mobile = 1111111111;
	$s3->show();


?>
