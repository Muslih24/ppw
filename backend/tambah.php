<?php
require 'functions.php';

//cek submit
if (isset ($_POST["submit"]) ) {
	//cek keberhasilan
	if (add ($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Input!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Input!');
				document.location.href = 'index.php';
			</script>
		";
	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data User</title>
</head>
<body>

<h1>Tambah data mahasiswa</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="varchar" name="username" id="username" required>
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="varchar" name="password" id="password" required>
		</li>
		<li class="form-group">
			<label for="hak_akses">Hak Akses :</label>
			<select class="form-control" name="hak_akses" id="hak_akses" required>
			<option value="">Pilih</option>
			<option value="superadmin">SU</option>
			<option value="admin">admin</option>
			<option value="adminlokasi">adminlokasi</option>
			</select>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="varchar" name="nama" id="nama" required>
		</li>
		<li class="form-group">
			<label for="jk">Jenis Kelamin :</label>
			<select class="form-control" name="jk" id="jk" required>
				<option value="">Pilih</option>
				<option value="laki-laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
		</li>
		<li>
			<label for="tanggal_lahir">Tanggal Lahir :</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat" required>
		</li>
		<li>
			<label for="no_hp">No Hp :</label>
			<input type="varchar" name="no_hp" id="no_hp" required>
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="varchar" name="email" id="email" required>
		</li>
		<li>
			<button type="submit" name="submit">Simpan Data</button>
		</li>
	</ul>
</form>

</body>
</html>
