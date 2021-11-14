<?php

	$server = "localhost";
	$user		= "root";
	$password = "";
	$db				= "mahasiswa-dama";
	
	$koneksi = mysqli_connect($server, $user, $password, $db);


	if(mysqli_connect_errno()) {
		echo "Gagal Koneksi ke database" . mysqli_connect_error();
	}