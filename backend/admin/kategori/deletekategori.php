<?php
session_start();
require '../../functions.php';
//
if (!$_SESSION["hak_akses"]=="superadmin") {
	header("Location:../../login.php");
}

$id_kategori= $_GET["id_kategori"];

if (deletek($id_kategori) > 0 ) {
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

 ?>
