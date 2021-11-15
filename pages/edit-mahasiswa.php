<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
include './koneksi.php';

$id_mahasiswa = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
?>
<form action="index.php?p=fungsi" method="POST">

	<div class="form-group">
		<label for="exampleInputEmail1">Nama Mahasiswa</label>
		<input type="hidden" name="id_mahasiswa" value="<?= $row['id_mahasiswa']; ?>" class="form-control w-50">
		<input type="text" name="nama" value="<?= $row['nama']; ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama . . ." required>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">NIM</label>
		<input type="text" name="nim" value="<?= $row['nim']; ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM . . ." required>
	</div>
  <div class="form-group">
		<label for="exampleInputEmail1">Program Studi</label>
    <select name="prodi" class="form-control w-50" value=""  required>
			<option value="<?= $row['prodi']; ?>" selected="selected">-- Pilih Prodi --</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
    </select>
  </div>
	<input type="submit" name="edit-mahasiswa" value="Update" class="btn btn-warning ">
	<!-- <input id="reset" type="reset" name="" value="reset" class="btn btn-success"> -->
</form>

<?php } ?>
