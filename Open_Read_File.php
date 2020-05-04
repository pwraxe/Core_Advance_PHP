$file = fopen("list_of_php_function.txt","r") or die("Unable to open file");
	while (!feof($file)) {
		$data = fgets($file);
		echo "$data <br>";
	}
	fclose($file);
  
  
  
  output : will display data of file


---------------------------------------------------------------------------------------------

feof()   --> check end of file 
fgets()  --> file get string
fgetc()  --> file get character

file_get_contect()  --> read whole file at a time

str_replace(oldString, newString) 

Array = file("fileName.txt");  ==> read all data of file and put each word in array and return array

bool = file_exists("file_name.txt");   ----> check file exist or not  return 

int = filesize("filename.txt") => return total character in file

array = state("filename.txt"); ---> complete info about file

copy(srcFile, destFile)  --> copy the content of source file into destFile


unlink("filename.txt");  --> for delete file






