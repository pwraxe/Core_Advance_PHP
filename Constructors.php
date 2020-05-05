class Student{
   function __construct(){
	    echo "default constructor";
  } 	
}
new Student;

-------------------------------------------------------------------------------------------------------------

class Student{
	function Student(){
		echo "class name constructor";
	}	
}
new Student;

-------------------------------------------------------------------------------------------------------------

class Student{
	function __construct($id){
   echo "default constructor $id";
	}
}
new Student(10);

-------------------------------------------------------------------------------------------------------------
class Student{
		function __construct($id){
			echo "default constructor $id";
	}
}

new Student(10);

-------------------------------------------------------------------------------------------------------------

class Student{
		public $name;
		function __construct($id, $name){
  			$this->name = $name;
	  		echo "default constructor $id : $this->name";
		}
}
new Student(10,"dummy name");

-------------------------------------------------------------------------------------------------------------
class Student{
		public $_name;
		function __construct($id, $name){
			  $this->_name = $name;
			  echo "default constructor $id : $this->_name";
		}
}
new Student(10,"dummy name");

-------------------------------------------------------------------------------------------------------------

class Student{
		public $_name;
		function Student($id, $name){
			  $this->_name = $name;
			  echo "default constructor $id : $this->_name";
		}
}
new Student(10,"dummy name");

---------------------------------------------------------------

class Student{
		public $_name;
		function Student($id, $name,$mobile=123567890){
			  $this->_name = $name;
			  echo "default constructor $id : $this->_name : $mobile";
		}
}
new Student(10,"dummy name");

-------------------------------------------------------------------------------------------------------------
class Student{
	  public $_name;
		function Student($id, $name,$mobile=123567890){
			  $this->_name = $name;
			  echo "default constructor $id : $this->_name : $mobile";
		}
}
new Student(10,"dummy name",9874451);

-------------------------------------------------------------------------------------------------------------

class Student{
		public $_id;
		public $_name;
		public $_mobile;

		function Student($id, $name,$mobile){    || function __construct($id, $name,$mobile){
			echo "default constructor<br>";
			$this->_id = $id;
			$this->_name = $name;
			$this->_mobile = $mobile;
		}
		function show(){
			echo " $this->_id : $this->_name : $this->_mobile";
		}
	}
	$stud = new Student(10,"dummy name",9874451);
	$stud->show();

-------------------------------------------------------------------------------------------------------------

  class Student{
		public $_id;
		public $_name;
		public $_mobile;

		function Student($id, $name,$mobile){
			echo "default constructor<br>";
			$this->_id = $id;
			$this->_name = $name;
			$this->_mobile = $mobile;
		}
		function show(){
			echo " $this->_id : $this->_name : $this->_mobile";
		}
	}
	$stud = new Student($name = "Dummey Name",$mobile = 1234567890,$id=1002);
	$stud->show();

-------------------------------------------------------------------------------------------------------------

class Student{
		public $_id;
		public $_name;
		public $_mobile;

		function Student($id, $name,$mobile){
			echo "default constructor<br>";
			$this->_id = $id;
			$this->_name = $name;
			$this->_mobile = $mobile;
		}
		function show1(){
			echo "ID :  $this->_id <br>";
		}
		function show2(){
			echo "Name : $this->_name<br>";
		}
		function show3(){
			echo "Mobile : $this->_mobile<br>";
		}
	}

	$stud = new Student($name = "Dummey Name",$mobile = 1234567890,$id=1002);
	$stud->show1();
	$stud->show2();
	$stud->show3();
-------------------------------------------------------------------------------------------------------------
