<!-- PALING ATAS PANGGIL TEMPLATE -->
<link rel="stylesheet" href="import/template.css">


<h1>SELAMAT DATANG, di UNIMUDA SORONG (versi view)</h1>
<hr>
NIM : <?= $prodi['nim'] ?>
<br>
NAMA : <?= $prodi['nama'] ?>
<hr>

<a class="btn btn-primary" href="<?= site_url('mahasiswa') ?>">MAHASISWA</a>
<a class="btn btn-warning" href="<?= site_url('dosen') ?>">DOSEN</a>
<a class="btn btn-success" href="<?= site_url('matkul') ?>">MATA KULIAH</a>