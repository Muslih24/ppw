<?php
$conn = mysqli_connect("localhost","root","","db_wisata");
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

 function add($data){
 	global $conn;

 	$username = strtolower(stripslashes($data["username"]));
	$password = md5($data["password"]);
	$hak_akses = $data["hak_akses"];
	$nama = htmlspecialchars($data["nama"]);
	$jk = $data["jk"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$email = htmlspecialchars($data["email"]);


	$query = "INSERT INTO user VALUES	('', '$username', '$password', '$hak_akses', '$nama', '$jk', '$tanggal_lahir', '$alamat', '$no_hp', '$email')
				";


$a = mysqli_query($conn,$query);


//return mysqli_affected_rows($conn);


 }


 function hapus($id_user){
 	global $conn;
 	mysqli_query($conn, "DELETE FROM user WHERE id_user = $id_user");
 }


function update($data){
global $conn;

	$id_user = $data["id_user"];
 	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$hak_akses = $data["hak_akses"];
	$nama = htmlspecialchars($data["nama"]);
	$jk = $data["jk"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$email = htmlspecialchars($data["email"]);
	$query = mysqli_query($conn, "UPDATE user SET
			username = '$username',
			password = md5('$password'),
			hak_akses = '$hak_akses',
			nama = '$nama',
			jk = '$jk',
			tanggal_lahir = '$tanggal_lahir',
			alamat = '$alamat',
			no_hp = '$no_hp',
			email = '$email'
			WHERE id_user = $id_user");


	return mysqli_affected_rows($conn);
 	}
function addw($data){
 	global $conn;

 	$nama_wisata = strtolower(stripslashes($data["nama_wisata"]));
	$alamat_wisata = htmlspecialchars($data["alamat_wisata"]);
	$harga = htmlspecialchars($data["harga"]);
	$jarak = htmlspecialchars($data["jarak"]);

	$tikor_wisata = htmlspecialchars($data["tikor_wisata"]);
	$fasilitas = htmlspecialchars($data["fasilitas"]);
	$kategori = $data["kategori"];


	$query = "INSERT INTO wisata
			VALUES
			('$nama_wisata', '$alamat_wisata', '$harga', '$jarak', '$tikor_wisata', '$fasilitas', '$kategori')
				";
				var_dump($query);
	//mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);


 }

function cari($keyword){
	$query = "SELECT * FROM user
		WHERE
		username LIKE '%$keyword%' OR
		nama LIKE '%$keyword%'
		";
	return query($query);
}
 ?>
