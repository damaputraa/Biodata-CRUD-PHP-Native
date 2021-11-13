<?php
include 'koneksi.php';

if ($_GET['act'] == 'tambahpasien') {
  $id_pasien = $_POST['id_pasien'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $nik_ktp = $_POST['nik_ktp'];
  $keluhan = $_POST['keluhan'];
  $jk = $_POST['jk'];

  //query Tambah
  $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_pasien VALUES('$id_pasien' , '$nama' , '$alamat' , '$nik_ktp' , ' $keluhan ', ' $jk ')");

  if ($querytambah) {
    # code redicet setelah insert ke index
    header("location: crud.php");
  } else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
  }
} elseif ($_GET['act'] == 'updatepasien') {
  $id_pasien = $_POST['id_pasien'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $nik_ktp = $_POST['nik_ktp'];
  $keluhan = $_POST['keluhan'];
  $jk = $_POST['jk'];

  //query update
  $queryupdate = mysqli_query($koneksi, "UPDATE tb_pasien SET nama='$nama' , alamat='$alamat' , nik_ktp='$nik_ktp' , keluhan='$keluhan', jk='$jk' WHERE id_pasien='$id_pasien' ");

  if ($queryupdate) {
    # credirect ke page index
    header("location: crud.php");
  } else {
    echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
  }
} elseif ($_GET['act'] == 'deletepasien') {
  $id_pasien = $_GET['id'];

  //query hapus
  $querydelete = mysqli_query($koneksi, "DELETE FROM tb_pasien WHERE id_pasien = '$id_pasien'");

  if ($querydelete) {
    # redirect ke index.php
    header("location: crud.php");
  } else {
    echo "ERROR, data gagal dihapus" . mysqli_error($koneksi);
  }

  mysqli_close($koneksi);
}
