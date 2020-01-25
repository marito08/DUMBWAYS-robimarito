<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
<?php 
include('../connect.php');

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM writer_tb where id='$id'");
$sql->execute();
$no = 1;
?>
<h1>Detail buku</h1>
<?php while($data = $sql->fetch()) :?>
	<p>Id : <span><?= $data['id'] ?></span></p>
	<p>Kategori : <span><?= $data['name'] ?></span></p>
	<p><a href="index.php">Kembali</a></p>
<?php endwhile; ?>
</body>
</html>