<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<h1>Data buku</h1>
<?php

include('../connect.php');
$sql = $pdo->prepare("SELECT book_tb.id as id, book_tb.name as book,category_tb.name as category,writer_tb.name as writer,book_tb.publication_year as year,book_tb.img as img FROM book_tb LEFT JOIN category_tb on category_tb.id = book_tb.id LEFT JOIN writer_tb on writer_tb.id = book_tb.id");
$sql->execute();

$no = 1;
?>
<form action="" method="GET">
	<table border="1">
		<th>No</th>
		<th>Buku</th>
		<th>Kategori</th>
		<th>Penulis</th>
		<th>Tahun terbit</th>
		<th>Action</th>
		<?php while($data = $sql->fetch()) :?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $data['book']?></td>
			<td><?= $data['category']?></td>
			<td><?= $data['writer']?></td>
			<td><?= $data['year']?></td>
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