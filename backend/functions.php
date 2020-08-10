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


	$query = "INSERT INTO user VALUES	('', '$username', '$password', '$hak_akses', '$nama')
				";


mysqli_query($conn,$query);

return mysqli_affected_rows($conn);


 }


 function delete($id_user){
 	global $conn;
 	$delete = mysqli_query($conn, "DELETE FROM user WHERE id_user = $id_user");
	if($delete){
		echo "
			<script>
				alert('Successed To Delete');
				document.location.href = 'index_admin.php';
			</script>
		";
	}else{
		echo "
			<script>
			alert('Failed To Delete');
				document.location.href = 'index_admin.php';
			</script>
		";
	}
	}



function update($data){
global $conn;

	$id_user = $data["id_user"];
 	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$hak_akses = $data["hak_akses"];
	$nama = htmlspecialchars($data["nama"]);
	$query = mysqli_query($conn, "UPDATE user SET username = '$username', password = md5('$password'),nama = '$nama',	hak_akses = '$hak_akses' WHERE id_user = $id_user");


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

		$namaBaru = date("YmdHis");
		$namaBaru .= '.';
		$namaBaru .= $eksgambar;

		move_uploaded_file($tmpName, '../../../assets/img/images/kategori/' .$namaBaru);

		return $namaBaru;
	}

	function edit($data){
		global $conn;
		$id_kategori = $data["id_kategori"];
		$nama_kategori = htmlspecialchars($data["nama_kategori"]);
		$deskripsi_kategori = htmlspecialchars($data["deskripsi_kategori"]);
		$gambarLama  = htmlspecialchars($data["gambarLama"]);


		if ( $_FILES['foto_kategori']['error'] === 4) {
			$foto_kategori = $gambarLama;
		}else {
			$foto_kategori  = upload();
		}

		$queryk = mysqli_query($conn, "UPDATE kategori SET nama_kategori = '$nama_kategori', deskripsi_kategori = '$deskripsi_kategori',foto_kategori = '$foto_kategori' WHERE id_kategori = $id_kategori");

		return mysqli_affected_rows($conn);
	}



	function deletek($id_kategori){
  	global $conn;
  	$deletek = mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = $id_kategori");
 	if($deletek){
 		echo "
 			<script>
 				alert('Successed To Delete');
 				document.location.href = 'index_kategori.php';
 			</script>
 		";
 	}else{
 		echo "
 			<script>
 			alert('Failed To Delete');
 				document.location.href = 'index_kategori.php';
 			</script>
 		";
 	}
 	}

	function editw($data){
		global $conn;
		$id_wisata = $data["id_wisata"];
		$id_kategori = htmlspecialchars($data["id_kategori"]);
		$nama_wisata = htmlspecialchars($data["nama_wisata"]);
		$alamat_wisata = htmlspecialchars($data["alamat_wisata"]);
		$harga = htmlspecialchars($data["harga"]);
		$fasilitas  = htmlspecialchars($data["fasilitas"]);
		$gambarLamaW  = htmlspecialchars($data["gambarLamaW"]);


			if ( $_FILES['lampiran']['error'] === 4) {
				$lampiran = $gambarLamaW;
			}else {
				$lampiran  = uploadw();
			}



		$queryw = mysqli_query($conn, "UPDATE wisata SET id_kategori = '$id_kategori', nama_wisata = '$nama_wisata', alamat_wisata = '$alamat_wisata',harga = '$harga',lampiran = '$lampiran' WHERE id_wisata = $id_wisata");

		return mysqli_affected_rows($conn);
	}

 	function deletew($id_wisata){
  	global $conn;
  	$deletew = mysqli_query($conn, "DELETE FROM wisata WHERE id_wisata = $id_wisata");
 	if($deletew){
 		echo "
 			<script>
 				alert('Successed To Delete');
 				document.location.href = 'index_wisata.php';
 			</script>
 		";
 	}else{
 		echo "
 			<script>
 			alert('Failed To Delete');
 				document.location.href = 'index_wisata.php';
 			</script>
 		";
 	}
 	}

function addw($data){
		global $conn;

		$id_wisata = htmlspecialchars($data["id_wisata"]);
		$id_kategori = htmlspecialchars($data["id_kategori"]);
		$nama_wisata = htmlspecialchars($data["nama_wisata"]);
		$alamat_wisata = htmlspecialchars($data["alamat_wisata"]);
		$harga = htmlspecialchars($data["harga"]);
		$fasilitas = htmlspecialchars($data["fasilitas"]);

		$lampiran = uploadw();
			if (!$lampiran) {
				return false;
			}
			$queryw = mysqli_query($conn,"INSERT INTO wisata VALUES	('','$id_kategori','$nama_wisata','$alamat_wisata', '$harga', '$fasilitas','$lampiran')");

		return mysqli_affected_rows($conn);
	}

	function uploadw(){
		$namaFile = $_FILES["lampiran"]["name"];
		$ukuranFile = $_FILES["lampiran"]["size"];
		$error = $_FILES["lampiran"]["error"];
		$tmpName = $_FILES["lampiran"]["tmp_name"];
		$eksgambarvalid = ['jpg','jpeg','png'];

		if ($error === 4) {
			echo "<script>
			alert('Pilih gambar bang');
			</script>";
			return false;
		}

		$eksgambar = explode('.', $namaFile);
		$eksgambar = strtolower(end($eksgambar));

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

		$namaBaru = date("YmdHis");
		$namaBaru .= '.';
		$namaBaru .= $eksgambar;

		move_uploaded_file($tmpName, '../../../assets/img/images/wisata/' .$namaBaru);

		return $namaBaru;
	}




function cari($keyword){
	$query = "SELECT * FROM user
		WHERE
		username LIKE '%$keyword%' OR
		nama LIKE '%$keyword%'
		";
	return query($query);
	}

// function cariw($keyword){
// 	$query = "SELECT * FROM wisata
// 		WHERE
// 		nama_wisata LIKE '%$keyword%'";
// 	return query($query);
// 	}


function carik($keyword){
	$query = "SELECT * FROM kategori
		WHERE
		nama_kategori LIKE '%$keyword%'";
	return query($query);
	}
 ?>
