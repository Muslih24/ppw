<?php
require 'functions.php';

$id_user = $_GET["id_user"];

$user = query("SELECT * FROM user WHERE id_user = $id_user")[0];


//cek submit
if (isset ($_POST["submit"]) ) {
	//cek keberhasilan
	if (update ($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Update!');
				document.location.href = 'index_admin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Update!');
				document.location.href = 'index_admin.php';
			</script>
		";
	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data User</title>
</head>
<body>

<h1>Update data user</h1>
<form action="" method="post">
	<input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="varchar" name="username" id="username" required value="<?= $user["username"];  ?>">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="varchar" name="password" id="password" required value="<?= $user["password"]; ?>">
		</li>
		<li class="form-group">
			<label for="hak_akses">Hak Akses :</label>
			<select class="form-control" name="hak_akses" id="hak_akses" required value="<?= $user["hak_akses"]; ?>">
			<option value="">Pilih</option>
			<option value="superadmin">SU</option>
			<option value="admin">admin</option>
			<option value="adminlokasi">adminlokasi</option>
			</select>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="varchar" name="nama" id="nama" required value="<?= $user["nama"]; ?>">
		</li>
		<li class="form-group">
			<label for="jk">Jenis Kelamin :</label>
			<select class="form-control" name="jk" id="jk" required value="<?= $user["jk"]; ?>">
				<option value="">Pilih</option>
				<option value="laki-laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
		</li>
		<li>
			<label for="tanggal_lahir">Tanggal Lahir :</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" required value="<?= $user["tanggal_lahir"]; ?>">
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat" required value="<?= $user["alamat"]; ?>">
		</li>
		<li>
			<label for="no_hp">No Hp :</label>
			<input type="varchar" name="no_hp" id="no_hp" required value="<?= $user["no_hp"]; ?>">
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="varchar" name="email" id="email" required value="<?= $user["email"]; ?>">
		</li>
		<li>
			<button type="submit" name="submit">Update Data</button>
		</li>
	</ul>
</form>

</body>
</html>
