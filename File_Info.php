<?php

	$info = stat("list_of_php_function.txt");
	print_r($info);

?>



output : 



Array ( 

	// file info can access by index if we know 

		[0] => 3972329785 			// Device Number
		[1] => 2533274790466336 		// inode number
		[2] => 33206 				// inode protection mode
		[3] => 1 				// number of link
		[4] => 0 				// userid of owner
		[5] => 0 				// groupid of owner
		[6] => 0 				// device type, if inode device
		[7] => 3862 				// size in byte
		[8] => 1588575318 			// time of last access
		[9] => 1588514666 			// time of last modified
		[10] => 1588513916 			// time of last inode change
		[11] => -1 				// blocksize of file system
		[12] => -1 				// number of 512 byte block allocated
		

		
	// file info can access by name if we know

		[dev] => 3972329785 			
		[ino] => 2533274790466336 
		[mode] => 33206 
		[nlink] => 1 
		[uid] => 0 
		[gid] => 0 
		[rdev] => 0 
		[size] => 3862 
		[atime] => 1588575318 
		[mtime] => 1588514666 
		[ctime] => 1588513916 
		[blksize] => -1 
		[blocks] => -1 
	)

