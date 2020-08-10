<?php
session_start();
require '../../functions.php';
//
if (!$_SESSION["hak_akses"]=="superadmin") {
	header("Location:../../login.php");
}

$id_wisata= $_GET["id_wisata"];

if (deletew($id_wisata) > 0 ) {
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

 ?>
