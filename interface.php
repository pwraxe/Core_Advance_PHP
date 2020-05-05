<?php
	
	interface Shop{
		public function income();
		public function invest();
	}

	class PawarGarment implements Shop{

		public $shop_name = "Pawar Garment";
		public $address = "Town, City, State, Country, pincode";

		public function income() {
			echo "income is something K<br>";
		}
		public function invest(){
			echo "invest is something K";
		}

		function shopDetail(){
			echo "<br>Shop Name : $this->shop_name<br>Address : $this->address";
		}
	} 

	$pg = new PawarGarment;
	$pg->income();
	$pg->invest();
	$pg->shopDetail();
?>



output
    income is something K
    invest is something K
    Shop Name : Pawar Garment
    Address : Town, City, State, Country, pincode
