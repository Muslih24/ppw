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


mysqli_query($conn,$query);


return mysqli_affected_rows($conn);


 }


 function delete($id_user){
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

	function addk($data){
		global $conn;

		$nama_kategori = htmlspecialchars($data["nama_kategori"]);
		$deskripsi_kategori = htmlspecialchars($data["deskripsi_kategori"]);

		$foto_kategori = upload();
			if (!$foto_kategori) {
				return false;
			}

		$query = "INSERT INTO kategori VALUES('','$nama_kategori','$deskripsi_kategori','$foto_kategori')";


		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
	}

	function upload(){
		$namaFile = $_FILES["foto_kategori"]["name"];
		$ukuranFile = $_FILES["foto_kategori"]["size"];
		$error = $_FILES["foto_kategori"]["error"];
		$tmpName = $_FILES["foto_kategori"]["tmp_name"];
		$eksgambarvalid = ['jpg','jpeg','png'];

		if ($error === 4) {
			echo "<script>
			alert('Pilih gambar bang');
			</script>";
			return false;
		}

		$eksgambar = explode('.', $namaFile);
		$eksgambar = strtolower(end($eksgambar));
		$namaBaru = date("YmdHis");
		$namaBaru .= '.';
		$namaBaru .= $eksgambar;

		var_dump($namaBaru);die;
		if (!in_array($eksgambar, $eksgambarvalid)) {
			echo "<script>
			alert('Bukan gambar itu teh');
			</script>";
			return false;
		}

		if ($ukuranFile > 3000000) {
			echo "<script>
			alert('Ukurannya kebesaran');
			</script>";
			return false;
		}

		move_uploaded_file($tmpName, 'images/' .$namaBaru);

		return $namaBaru;

	}


function addw($data){
 	global $conn;

 	$nama_wisata = strtolower(stripslashes($data["nama_wisata"]));
	$alamat_wisata = htmlspecialchars($data["alamat_wisata"]);
	$harga = htmlspecialchars($data["harga"]);
	$jarak = htmlspecialchars($data["jarak"]);
	$tikor_wisata = htmlspecialchars($data["tikor_wisata"]);
	$fasilitas = htmlspecialchars($data["fasilitas"]);


	$query = "INSERT INTO wisata	VALUES	('$nama_wisata', '$alamat_wisata', '$harga', '$jarak', '$tikor_wisata', '$fasilitas', '$kategori')
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
