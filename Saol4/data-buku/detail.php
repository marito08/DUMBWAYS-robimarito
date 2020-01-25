<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
<?php 
include('../connect.php');

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM book_tb where id='$id'");
$sql->execute();
$no = 1;
?>
<h1>Detail buku</h1>
<?php while($data = $sql->fetch()) :?>
	<p>Nama buku : <span><?= $data['name'] ?></span></p>
	<p>Id kategori buku : <span><?= $data['category_id'] ?></span></p>
	<p>Id writer : <span><?= $data['writer_id'] ?></span></p>
	<p>Tahun publikasi : <span><?= $data['publication_year'] ?></span></p>
	<p>Foto buku : <span><?= $data['img'] ?></span></p>
	<p><a href="index.php">Kembali</a></p>
<?php endwhile; ?>
</body>
</html>