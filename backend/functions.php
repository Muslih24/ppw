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

 	$username = htmlspecialchars($data["username"]);
	$password = md5(htmlspecialchars($data["password"]));
	$hak_akses = $data["hak_akses"];
	$nama = htmlspecialchars($data["nama"]);
	$jk = $data["jk"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$email = htmlspecialchars($data["email"]);

	$query = "INSERT INTO user
			VALUES
			('', '$username', '$password', '$hak_akses', '$nama', '$jk', '$tanggal_lahir', '$alamat', '$no_hp', '$email')
				";
				var_dump($query);
	//mysqli_query($conn, $query);

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

 ?>
