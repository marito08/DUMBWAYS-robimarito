<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<h1>Data buku</h1>
<?php

include('../connect.php');
$sql = $pdo->prepare("SELECT * FROM writer_tb");
$sql->execute();

$no = 1;
?>
<form action="" method="GET">
	<table border="1">
		<th>No</th>
		<th>Kategori</th>
		<th>Action</th>
		<?php while($data = $sql->fetch()) :?>
		<tr>
			<td><?= $data['id'] ?></td>
			<td><?= $data['name'] ?></td>
			<td>
			<a href="tambah_data.php">Tambah</a>
			<a href="update_data.php?id=<?= $data['id']?>">Update</a>
			<a href="detail.php?id=<?= $data['id']?>">Detail</a>
			<a href="delete.php?id=<?= $data['id']?>" onclick="return confirm('Anda ingin menghapus data')">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>	
	</table>	
</form>

</body>
</html>