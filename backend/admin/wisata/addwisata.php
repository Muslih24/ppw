<?php
session_start();
require '../../functions.php';

if (!$_SESSION["hak_akses"]=="superadmin") {
  header("Location:../../login.php");
}

if (isset ($_POST["submit"]) ) {
	//cek keberhasilan
	if (addw ($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Input!');
				document.location.href = 'index_wisata.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Input!');
				document.location.href = 'index_wisata.php';
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
			<input type="varchar" name="nama_wisata" id="nama_wisata" required></input>
		</li>
		<li>
			<label for="alamat_wisata">Alamat Wisata :</label>
			<textarea type="text" name="alamat_wisata" id="alamat_wisata" required></textarea>
		</li>
			<li>
			<label for="harga">Harga Tiket Masuk :</label>
			<input type="varchar" name="harga" id="harga" required></input>
		</li>
		
		<li>
			<label for="fasilitas">Fasilitas :</label>
			<textarea type="text" name="fasilitas" id="fasilitas" ></textarea>
		</li>
		 <li>
                 <label for="fasilitas">Lampiran : </label>
                 <input class="form-control-file" type="file" id="lampiran">
		</li>
		<br>
		<li>
			<button type="submit" name="submit">Simpan Data</button>
		</li>
	</ul>
</form>

</body>
</html>
