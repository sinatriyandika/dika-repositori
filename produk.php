<?php 
require 'functions.php';
$produk = query ("SELECT * FROM produk");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mainan Anak</h1>

<a href="tambah.php">Tambah Data Produk</a>
<br><br>

<table   border="3" cellpadding="100" cellspacing="0">
<thead>
	<tbody>
	<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Foto</th>
			<th>Aksi</th>
	</tr>
</tbody>
</thead>
<th>
<?php $i = 1;  ?>
<?php foreach($produk as $row): ?>

	<tr>

		<td><?= $i ; ?></td>
		<td><?= $row ["nama_produk"];  ?></td>
		<td><?= $row ["harga_produk"]; ?> </td>
		<td><?= $row ["berat"]; ?> </td>
		<td><img src="img/<?= $row ["foto_produk"]; ?> " width="50"></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>

	</tr>

	<?php $i++;  ?>
<?php endforeach; ?>
	</th>
</table>

</body>
</html>