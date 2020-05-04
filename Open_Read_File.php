$file = fopen("list_of_php_function.txt","r") or die("Unable to open file");
	while (!feof($file)) {
		$data = fgets($file);
		echo "$data <br>";
	}
	fclose($file);
  
  
  
  output : will display data of file
