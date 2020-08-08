<?php
session_start();
require '../../functions.php';
//
if (!$_SESSION["hak_akses"]=="superadmin") {
	header("Location:../../login.php");
}

$id_kategori= $_GET["id_kategori"];

$pilih = mysqli_query("SELECT * FROM kategori WHERE id_kategori=''$id_kategori'");
$data = mysqli_fetch_array($pilih);
$foto = $data['foto_kategori'];
unlink("../../../assets/img/images/kategori/".$foto);
$hapus = mysqli_query("DELETE from kategori where id_kategori='$id_kategori'");
var_dump($hapus);die;
if ($hapus) {
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

 ?>
