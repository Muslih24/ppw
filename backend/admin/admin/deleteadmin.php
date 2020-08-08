<?php
session_start();
require '../../functions.php';
//
if (!$_SESSION["hak_akses"]=="superadmin") {
	header("Location:../../login.php");
}

$id_user = $_GET["id_user"];

 ?>
