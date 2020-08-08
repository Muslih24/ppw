<?php
session_start();

if (isset($_SESSION["login"])) {
	// code...
	if(($_SESSION["hak_akses"]=="superadmin")) {
		header("Location:admin/admin/index_admin.php");
	}elseif(($_SESSION["hak_akses"]=="admin")) {
		header("Location:cekin/wisata.php");
	}else {
		header("Location:login.php");
	}
}

	require 'functions.php';

if (isset($_POST["login"]) ) {
	$username = $_POST["username"];
	$password =  md5($_POST["password"]);

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
	$a = mysqli_num_rows($result);

		if ($a > 0) {
			$row = mysqli_fetch_assoc($result);

			if ($row["hak_akses"]=="superadmin") {
				$_SESSION["username"] = $username ;
				$_SESSION["hak_akses"] = "superadmin" ;
				$_SESSION["login"] = true ;
				echo "<script>
					alert('YEYYYY');
					document.location.href = 'admin/admin/index_admin.php';
					</script>
				";
				//echo "superadmin";
			}elseif ($row["hak_akses"]=="admin") {
				$_SESSION["username"] = $username;
				$_SESSION["hak_akses"] = "admin";
				$_SESSION["login"] = true ;

				echo "kau bukan super admin";
			}else {
				header("Location:login.php");
			}

		}else {
			echo
			"<script>
					alert('Username dan Password Salah');
					document.location.href = 'login.php';
				</script>";
			}

				//header("Location:login.php");

}
 ?>

	<!DOCTYPE html>
	<html>
	<head>

		<title>::Login::</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/stylelogin.css">
		<link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome/css/fontawesome.css">
		<link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome/css/all.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="bg">
			<div class="loginbox">
				<h1>LOGIN</h1>
				<form  action="" method="post">

				<div class="textbox" style="color: #373737">
					<i class="far fa-user"></i>
					<input type="hidden" name="id_user">
					<input type="text" name="username" placeholder="Username">
				</div>

				<div class="textbox" style="color: #373737">
					<i class="fas fa-lock"></i>
					<input type="Password" name="password" placeholder="Password">
				</div>

				<input type="submit" name="login" value="Login">

			</div>
		</div>
	</body>
	</html>
