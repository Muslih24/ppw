<?php
session_start();
require '../functions.php';
//
if ($_SESSION["hak_akses"]=="") {
	header("Location:../login.php");
}

$id_user = $_GET["id_user"];


if ( delete($id_user) > 0 ) {
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
