<?php 
require 'functions.php';

$wisata = query("SELECT * FROM wisata");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wisata</title>
</head>
<body>
	<div>
	<a href="tambah_wisata.php">Tambah Wisata</a>
      <table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>Tempat Wisata</th>
		<th>Lokasi</th>
		<th>HTM</th>
		<th>Jarak</th>
		<th>Titik Kordinat Wisata</th>
		<th>Fasilitas</th>
		<th>Kategori</th>
		<th>Aksi</th>
	</tr>
	<?php foreach ($wisata as $row) : ?>
	<tr>
	<td><?= $row["nama_wisata"] ?></td>
	<td><?= $row["alamat_wisata"] ?></td>
	<td><?= $row["harga"] ?></td>
	<td><?= $row["jarak"] ?></td>
	<td><?= $row["tikor_wisata"] ?></td>
	<td><?= $row["fasilitas"] ?></td>
	<td><?= $row["kategori"] ?></td>
	<td>
		<a href="edit.php?id_wisata=<?= $row["id_wisata"]  ?>">Edit</a> |
        <a href="del.php?id_wisata=<?= $row["id_wisata"]  ?>"onclick=" return confirm('hapus?');">Delete</a>
	</tr>
	</td>
	<?php endforeach; ?>
	</table>
	</div>
</body>
</html>