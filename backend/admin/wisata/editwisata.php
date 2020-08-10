<?php
require 'functions.php';

$id_wisata = $_GET["id_wisata"];

$wisata = query("SELECT * FROM wisata WHERE id_wisata = $id_wisata")[0];

var_dump($wisata);
//cek submit
if (isset ($_POST["submit"]) ) {
	//cek keberhasilan
	if (edit ($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Edit!');
				document.location.href = 'wisata.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Edit!');
				document.location.href = 'wisata.php';
			</script>
		";
	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data Wisata</title>
</head>
<body>

<h1>Update Data Wisata</h1>
<form action="" method="post">
	<input type="hidden" name="id_wisata" value="<?= $wisata["id_wisata"]; ?>">
	<ul>
		<li>
			<label for="nama_wisata">Nama Wisata :</label>
			<input type="varchar" name="nama_wisata" id="nama_wisata" required value="<?= $wisata["nama_wisata"];  ?>">
		</li>
		<li>
			<label for="alamat_wisata">Alamat Wisata :</label>
			<input type="text" name="alamat_wisata" id="alamat_wisata" required value="<?= $wisata["alamat_wisata"]; ?>" >
		</li>
		<li>
			<label for="harga">Harga :</label>
			<input type="varchar" name="harga" id="harga" required value="<?= $wisata["harga"]; ?>">
		</li>
		<li>
			<label for="jarak">Jarak :</label>
			<input type="varchar" name="jarak" id="jarak" required value="<?= $wisata["jarak"]; ?>">
		</li>
		<li>
			<label for="tikor_wisata">Titik Kordinat Wisata :</label>
			<input type="text" name="tikor_wisata" required value="<?= $wisata["tikor_wisata"]; ?>">
		</li>
		<li>
			<label for="fasilitas">Fasilitas :</label>
			<input type="text" name="fasilitas" id="fasilitas" required value="<?= $wisata["fasilitas"]; ?>">
		</li>
		<li class="form-group">
			<label for="kategori">Kategori Wisata :</label>
			<select class="form-control" name="kategori" id="kategori" required value="<?= $wisata["kategori"]; ?>">
			<option value="">Pilih</option>
			<option value="kawah">Kawah</option>
			<option value="curug">Curug</option>
			<option value="gunung">Gunung</option>
			</select>
		</li>
		<li>
			<label for="lampiran">Lampiran :</label>
			 <input type="text" name="lampiran" id="lampiran"  required value="<?= $wisata["lampiran"]; ?>">
		</li>
		<li>
			<button type="submit" name="submit">Edit Data</button>
		</li>
	</ul>
</form>

</body>
</html>
