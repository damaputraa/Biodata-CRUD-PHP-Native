<?php 

include './koneksi.php';

// Deklarasikan Query 
	$id_mahasiswa	= $_POST['id_mahasiswa'];
	$nama					= $_POST['nama'];
	$nim					= $_POST['nim'];
	$prodi				= $_POST['prodi'];

// --------------------------- Tambah Mahasiswa --------------------------------
// Untuk Tambah Data Mahasiswa
if($_POST['tambah-mahasiswa']) {
	$queryTambah = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$prodi')");
	
	if ($queryTambah) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

// --------------------------- Update Mahasiswa --------------------------------
if(isset($_POST['edit-mahasiswa'])) {
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$nama					= $_POST['nama'];
	$nim					= $_POST['nim'];
	$prodi				= $_POST['prodi'];
	$queryEdit = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id_mahasiswa = '$id_mahasiswa' ");
	
	if($queryEdit) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}
// --------------------------- Delete Mahasiswa --------------------------------

if(isset($_GET['id'])) {
	$id_mahasiswa = $_GET['id'];
	
	$queryHapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'" );
	
	if($queryHapus == true) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}

}

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>