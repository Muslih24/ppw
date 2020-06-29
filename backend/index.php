<?php 
require 'functions.php';
  
$user = query("SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Hak Akses</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>No HP</th>
			<th>E-mail</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($user as $row) :	?> 

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["username"]  ?></td>
			<td><?= $row["hak_akses"]  ?></td>
			<td><?= $row["nama"]  ?></td>
			<td><?= $row["jk"]  ?></td>
			<td><?= $row["tanggal_lahir"]  ?></td>
			<td><?= $row["alamat"]  ?></td>
			<td><?= $row["no_hp"]  ?></td>
			<td><?= $row["email"]  ?></td>
			<td>
				<a href="tambah.php">Tambah</a> |
				<a href="edit.php">Edit</a> |
				<a href="del.php">Delete</a> 
			</td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	</table>
</body>
</html>