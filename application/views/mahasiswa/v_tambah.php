<link rel="stylesheet" href="<?= base_url('import/template.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>

<form name="form" method="POST" action="<?= site_url($action) ?>">
	NIM : <input value="<?= $mhs['nim'] ?>" required="" name="nim" type="number" placeholder="Silahkan Input NIM">
	<br/>

	Nama Lengkap : <input value="<?= $mhs['nama_mhs'] ?>" required="" name="nama" type="text" placeholder="Silahkan Input Nama">
	<br/>

	Jenis Kelamin : 
	<!-- nilai jk_mhs = Laki (v)
	nilai		= perempuan (v) -->
	<input <?= $mhs['jk_mhs'] == 'Laki-Laki' ? 'checked' : null ?> required="" name="jenis" type="radio" value="Laki-Laki"> Laki-Laki
	<input <?= $mhs['jk_mhs'] == 'Perempuan' ? 'checked' : null ?> required="" name="jenis" type="radio" value="Perempuan"> Perempuan
	<br/>

	Agama : 
	<select required="" name="agama" placeholder="---> Pilih Agama <---">
		<option value="">--> Pilih Agama <--</option>
		<option <?= $mhs['agama_mhs'] == 'Islam' ? 'selected' : null ?> value="Islam">Islam</option>
		<option <?= $mhs['agama_mhs'] == 'Kristen' ? 'selected' : null ?> value="Kristen">Kristen</option>
		<option <?= $mhs['agama_mhs'] == 'Katolik' ? 'selected' : null ?> value="Katolik">Katolik</option>
		<option <?= $mhs['agama_mhs'] == 'Hindu' ? 'selected' : null ?> value="Hindu">Hindu</option>
		<option <?= $mhs['agama_mhs'] == 'Budha' ? 'selected' : null ?> value="Budha">Budha</option>
	</select>
	<br/><br/>
	<button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
	<button type="reset" class="btn btn-default" name="reset">Reset Form</button>
</form>