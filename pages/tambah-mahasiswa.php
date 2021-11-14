	<?php include './koneksi.php'; ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form action="index.php?p=fungsi" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input type="text" name="nama" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Program Studi</label>
    <select name="prodi" class="form-control w-50" value=""  required>
      <option value="-" selected="selected">-- Pilih Prodi --</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
    </select>
  </div>
  <button type="submit" name="tambah-mahasiswa" value="Submit" class="btn btn-primary">Tambah</button>
</form>