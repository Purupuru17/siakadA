<!-- BARU -->
<link rel="stylesheet" href="<?= base_url('import/template.css') ?>">

<h1>DATA MAHASISWA</h1>
<hr>
<a class="btn btn-success" href="<?= site_url('mahasiswa/tambah') ?>">TAMBAH</a>
<hr>

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PRODI</th>
		<th>JK</th>
		<th>AGAMA</th>
		<th>AKSI</th>
	</tr>
	<tr>
		<td>1</td>
		<td>123110016</td>
		<td>Galih Bayu</td>
		<td>PTI</td>
		<td>Laki-Laki</td>
		<td>Islam</td>
		<td>
			<a class="btn btn-warning" href="<?= site_url('mahasiswa/ubah') ?>">UBAH</a>
<a class="btn btn-danger" href="<?= site_url('mahasiswa/hapus') ?>">HAPUS</a>
		</td>
	</tr>
</table>