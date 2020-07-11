<?php
// require 'admin/functions.php';
//
// if (isset($_POSH["login"]) ) {
//
// 	$username = $_POSH["username"];
// 	$password = $_POSH["password"];
//
// $a = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
//
//
// 	var_dump($a);
	// if (mysqli_num_rows($result) === 1 ) {

	// 	$rows = mysql_fetch_assoc($result);

	// 	if(password_verify($password, $row["password"]) ) {
	// 		header("Location: index.php");
	// 		exit;
	// 	}
	//}

// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>


<ul>
	<li>
		<label for="username">Username :</label>
		<input type="varchar" name="username" id="username">
	</li>
	<li>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button> <a href="index.php">Sign In</a></button>
	</li>
</ul>


</form>

</body>
</html>
