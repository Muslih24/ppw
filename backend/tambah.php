<?php
$conn = mysqli_connect("localhost", "root", "", "db_wisata");

//cek submit
if (isset($_POST["submit"]) ) {
	//ambil data
	$username = $_POST["username"];
	$password = $_POST["password"];
	$hak_akses = $_POST["hak_akses"];
	$nama = $_POST["nama"];
	$jk = $_POST["jk"];
	$tanggal_lahir = $_POST["tanggal_lahir"];
	$alamat = $_POST["alamat"];
	$no_hp = $_POST["no_hp"];
	$email = $_POST["email"];

	$query = "INSERT INTO db_wisata
			VALUES
			('', '$username', '$password', '$hak_akses', '$nama', '$jk', '$tanggal_lahir', '$alamat', '$no_hp', '$email')
				";
	mysqli_query($conn, $query);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

<h1>Tambah data mahasiswa</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="varchar" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="varchar" name="password" id="password">
		</li>
		<li>
			<label for="hak_akses">Hak Akses :</label>
			<br/>
			<input type="radio" value="superadmin" name="hak_akses" id="hak_akses">SU <br>
			<input type="radio" value="admin" name="hak_akses" id="hak_akses">Admin <br>
			<input type="radio" value="adminlokasi" name="hak_akses" id="hak_akses">Admin Lokasi
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="varchar" name="nama" id="nama">
		</li>
		<li>
			<label for="jk">Jenis Kelamin :</label>
			<br/>
			<input type="radio" value="laki-laki" name="jk" id="jk">Laki-laki <br>
			<input type="radio" value="perempuan" name="jk" id="jk">Perempuan
		</li>
		<li>
			<label for="tanggal_lahir">Tanggal Lahir :</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir">
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat">
		</li>
		<li>
			<label for="no_hp">No Hp :</label>
			<input type="varchar" name="no_hp" id="no_hp">
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="varchar" name="email" id="email">
		</li>
		<li>
			<button type="submit" name="submit">Simpan Data</button>
		</li>
	</ul>
</form>

</body>
</html>
