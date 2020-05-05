
class Student{
		public static $name = "Akshay Pawar";
		
		public function show(){
			echo " Name : ".self::$name."<br>";
		}
		public static function display(){
			echo "<br>called static function <br>";
		}
		
	}
	$s = new Student;
	$s->show();
	$s->display();		//static method can called by reference
	Student::display();	//static method can called by ClassName


	------	
	output:
		Name : Akshay Pawar
		called static function
		called static function

----------------------------------------------------------------------------------------

	class Student{
		public static $name = "default Name";
		
		public static function show(){
			echo " Name : ".self::$name."<br>";
		}
		public function display(){
			echo "called static function <br>";
		}
	}

	$s = new Student;
	$s->show();
	$s->display();		//static method can called by reference
	Student::display();	//static method can called by ClassName

	Student::$name = "Dummy Name";
	Student::show();

	-----
	output: 
		Name : default Name
		called static function
		called static function
		Name : Dummy Name
		
----------------------------------------------------------------------------------------

	class Person {
		public static $name = "Dummy Name";
	}

	class Student extends Person{
		function getName() {
			return self::$name;
		}
	}

	echo Student::getName();

----------------------------------------------------------------------------------------
