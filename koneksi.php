<?php

	$server = "localhost";
	$user		= "root";
	$password = "";
	$db				= "mahasiswa-dama";
	
	$koneksi = mysqli_connect($server, $user, $password, $db);

	if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}