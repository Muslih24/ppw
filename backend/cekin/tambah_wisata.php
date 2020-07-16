<?php
require 'functions.php';

if (isset ($_POST["submit"]) ) {
	//cek keberhasilan
	if (addw ($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Input!');
				document.location.href = 'wisata.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Input!');
				document.location.href = 'wisata.php';
			</script>
		";
	}


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Wisata</title>
	<style>
	#nama_wisata{
		border-radius: 20px;
		outline: inherit;
	}
		label{
			display: block;
		}
	</style>
</head>
<body>

<h1>Tambah Data Wisata</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nama_wisata">Tempat Wisata :</label>
			<input type="varchar" name="nama_wisata" id="nama_wisata" required>
		</li>
		<li>
			<label for="alamat_wisata">Alamat Wisata :</label>
			<input type="text" name="alamat_wisata" id="alamat_wisata" required>
		</li>
			<li>
			<label for="harga">HTM :</label>
			<input type="varchar" name="harga" id="harga" required>
		</li>
		<li>
			<label for="jarak">Jarak :</label>
			<input type="varchar" name="jarak" id="jarak" required>
		</li>
		<li>
			<label for="tikor_wisata">Titik Koordinat :</label>
			<input type="text" name="tikor_wisata" id="tikor_wisata" required>
		</li>
		<li>
			<label for="fasilitas">Fasilitas :</label>
			<input type="text" name="fasilitas" id="fasilitas" >
		</li>
		<li class="form-group">
			<label for="kategori">Kategori Wisata :</label>
			<select class="form-control" name="kategori" id="kategori" required>
				<option value="">Pilih</option>
				<option value="kawah">Kawah</option>
				<option value="curug">Curug</option>
				<option value="gunung">Gunung</option>
			</select>
		</li>
		<li>
			<label for="lampiran">Lampiran :</label>
			<input type="text" name="lampiran" id="lampiran" >
		</li>
		<br>
		<li>
			<button type="submit" name="submit">Simpan Data</button>
		</li>
	</ul>
</form>

</body>
</html>
