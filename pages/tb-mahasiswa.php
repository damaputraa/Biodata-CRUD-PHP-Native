 <?php include './koneksi.php'; ?>

 <!-- Tabel Mahasiswa -->
 <table class="table table-striped table-hover ">
        <thead>
          <h5 class="warna-text-tabel float-left mt-3"> <b> # Tabel Mahasiswa</b></h5>
          <div class="float-right"><a class="btn btn-primary" href="index.php?p=tambah-mahasiswa"> <i class="fa fa-plus"></i> Tambah Data</a></div>
          <tr>
            <th scope="col">No</th>
            <!-- <th scope="col">id_mhs</th> -->
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Prodi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
					<!-- Menampilkan Data dari Database -->
					<?php
						$no = 1;
						$ambilQuery = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa ASC");
						while ($row = mysqli_fetch_assoc($ambilQuery)) {
					?>

							<tr>
								<th scope="row"><?= $no++; ?></th>
								<!-- <td><?= $row ['id_mahasiswa'];?></td> -->
								<td><?= $row ['nama'];?></td>
								<td><?= $row ['nim'];?></td>
								<td><?= $row ['prodi'];?></td>
								<td>
									<a class="fa fa-pencil btn btn-warning mx-1" href="index.php?p=edit-mahasiswa" ></a>
									<a class="fa fa-trash btn btn-danger"  name="hapus-mahasiswa" href="index.php?p=fungsi&id=<?php echo $row['id_mahasiswa']; ?>"></a>
								</td>
							</tr>
					<?php	} ?>
        </tbody>
      </table>
