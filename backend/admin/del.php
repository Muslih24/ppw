<?php
require 'functions.php';

$id_user = $_GET["id_user"];

if ( hapus($id_user) > 0 ) {
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
