<?php

	$host = "localhost:3306";
	$user = "root";
	$password = "";
	$nama_db = "database_fintech";
	
	$koneksi = mysql_connect($host, $user, $password);
	mysql_select_db($nama_db, $koneksi);
	
	if(!$koneksi){
		echo "Failed connect to database! check koneksi.php";	
	}
	

?>