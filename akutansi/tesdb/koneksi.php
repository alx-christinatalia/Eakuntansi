<?php
	// Membangun koneksi 
	$dbhost = "localhost"; 
	$dbuser = "root";     
	$dbpass = "";         
	$db = "enotaris";
 
	// melakukan koneksi ke mysql
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass)or die ("koneksi gagal");

	//melakukan koneksi ke database
	$connectdb = mysqli_select_db($connect,$db)or die ("koneksi database gagal");
	echo $connectdb;
?>