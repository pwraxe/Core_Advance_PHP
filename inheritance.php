	// Single Level Inheritance
  
   class Person {
		  public $_name;
		  public $_email;
		  public $_mobile;
      
		  function __construct(){
			  echo " Parent class constructor <br>";
		  }	
		  function init($name,$email,$mobile){
			$this->_name = $name;
			$this->_email = $email;
			$this->_mobile = $mobile;  
		}
		function __destruct(){
			echo "parent class destructor <br>";
		}
	}

	class Student extends Person{

		function Student(){
			echo " Child class constructor <br>";
		}
		function show(){
			echo "Name : $this->_name<br>";
			echo "Email : $this->_email<br>";
			echo "Mobile : $this->_mobile<br>";
		}
		function __destruct(){
			echo "child class destructor <br>";
		}
	}

	$stud = new Student;
	$stud->init("dummyName","example@gmail.com",12354689);
	$stud->show();

/*
	output : 
		Parent class constructor
		Name : dummyName
		Email : example@gmail.com
		Mobile : 12354689
		child class destructor
	
	// Note : if you define constructor in child class then parent class constructor not call , if we are not define child class constructor then parent class constructor call 
*/

-----------------------------------------------------------------------------------------

	
	class Person {
		public $_name;
		public $_email;
		public $_mobile;

		function Person($name,$email, $mobile){
			$this->_name = $name;
			$this->_email = $email;
			$this->_mobile = $mobile;  
		}

		function getValues(){
			echo "Name : $this->_name<br>";
			echo "Email : $this->_email<br>";
			echo "Mobile : $this->_mobile<br>";
		}
	}
	class Student extends Person{
		function Student($name,$email, $mobile){
			parent :: __construct($name,$email, $mobile);
		}
	}

	$stud = new Student("dummyName","example@gmail.com",12354689);
	$stud->getValues();

/*
	output : 
		Name : dummyName
		Email : example@gmail.com
		Mobile : 12354689
*/

-----------------------------------------------------------------------------------------


	class owner {
		public $a = 10;
	}
	class Boss extends owner{
		public $b = 20;
	}
	class Employee extends Boss {
		public $c = 30;

		function getValues(){
			echo "owner Value  : $this->a <br>";
			echo "Boss Value : $this->b <br>";
			echo "Employee Value  : $this->c <br>";
		}
	}

	$c = new Employee;
	$c->getValues();


	/*
		output : 
			owner Value : 10
			Boss Value : 20
			Employee Value : 30
	*/


-----------------------------------------------------------------------------------------

class Employee {
		private $_name;			|| 			protected $_name;
		private $_email;		||			protected $_email;
		private $_mobile;		||			protected $_mobile;



		function Employee($name, $email, $mobile){
			$this->_name = $name;
			$this->_email = $email;
			$this->_mobile = $mobile;  
		}

		function getName(){
			return $this->_name;
		}
		function getEmail() {
			return $this->_email;
		}

		function getMobile(){
			return $this->_mobile;
		}

	}

	class Myself {

		function Myself(){
			$emp = new Employee("EmployeeName","emp@gmail.com",1234567890);
			echo $emp->getName()."<br>";
			echo $emp->getEmail()."<br>";
			echo $emp->getMobile()."<br>";
		}
	}

	new Myself();

	/*
		EmployeeName
		emp@gmail.com
		1234567890
	*/

-----------------------------------------------------------------------------------------
