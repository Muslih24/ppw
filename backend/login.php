<?php
session_start();

if (isset($_SESSION["login"])) {
	// code...
	if(($_SESSION["hak_akses"]=="superadmin")) {
		header("Location:index.php");
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

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	$a = mysqli_num_rows($result);

		if ($a > 0) {
			$row = mysqli_fetch_assoc($result);

			if ($row["hak_akses"]=="superadmin") {
				$_SESSION["username"] = $username ;
				$_SESSION["hak_akses"] = "superadmin" ;
				$_SESSION["login"] = true ;
				header("Location:index.php");
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
			header("Location:login.php");
		}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<form  action="" method="post">

<ul>
	<li>
		<label for="username">Username :</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="login">Login </button>
	</li>
</ul>


</form>

</body>
</html>
