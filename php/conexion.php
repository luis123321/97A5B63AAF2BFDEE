<?php 
	$dbCon = mysqli_connect("localhost","root","","yldb");
	if(mysqli_connect_errno()){
		echo "Falid to Connect:" , mysqli_connect_error();
	}
 ?>