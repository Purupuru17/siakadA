<!-- BARU -->
<link rel="stylesheet" href="<?= base_url('import/template.css') ?>">
<style>
	th, td{
		text-align: center;
	}
</style>
<h1>DATA MAHASISWA</h1>
<hr>
<a class="btn btn-success" href="<?= site_url('mahasiswa/tambah') ?>">TAMBAH</a>
<hr>

<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PRODI</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>AKSI</th>
	</tr>
	<!-- di ulang sebanyak DB -->
	<?php
	$no = 1;
	foreach($mhs as $value){
	?>
	<tr>
		<td><?= $no ?></td>
		<td><?= $value['nim'] ?></td>
		<td><?= $value['nama_mhs'] ?></td>
		<td><?= $value['prodi'] ?></td>
		<td><?= $value['jk_mhs'] ?></td>
		<td><?= $value['agama_mhs'] ?></td>
		<td>
			<a class="btn btn-warning btn-sm" href="<?= site_url('mahasiswa/ubah/' . $value['id_mhs']) ?>">UBAH</a>
			<a onclick="return confirm('Ko yakinkah mau hapus ?')" class="btn btn-danger btn-xs" href="<?= site_url('mahasiswa/hapus/' . $value['id_mhs']) ?>">HAPUS</a>
		</td>
	</tr>
	<?php
		$no = $no + 1;
	}
	?>
</table>