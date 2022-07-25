<link rel="stylesheet" href="<?= base_url('import/template.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>

<form name="form" method="POST" action="<?= site_url('mahasiswa/tambah_aksi') ?>">
	NIM : <input required="" name="nim" type="number" placeholder="Silahkan Input NIM">
	<br/>
	Nama Lengkap : <input required="" name="nama" type="text" placeholder="Silahkan Input Nama">
	<br/>
	Jenis Kelamin : <input required="" name="jenis" type="radio" value="Laki-Laki"> Laki-Laki
	<input required="" name="jenis" type="radio" value="Perempuan"> Perempuan
	<br/>
	Agama : 
	<select required="" name="agama" placeholder="---> Pilih Agama <---">
		<option value="">--> Pilih Agama <--</option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Katolik">Katolik</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
	</select>
	<br/><br/>
	<button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
	<button type="reset" class="btn btn-default" name="reset">Reset Form</button>
</form>