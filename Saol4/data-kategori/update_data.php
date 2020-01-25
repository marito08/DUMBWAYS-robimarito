<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
<?php 
include('../connect.php');

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM category_tb where id='$id'");
$sql->execute();
$no = 1;
?>
<h1>Tambah data</h1>
<p><a href="index.php">Kembali</a></p>
<form action="update.php" method="POST">
	<?php while($data = $sql->fetch()) :?>
		<label>Kategori</label>
		<input type="hidden" name="id" value="<?= $data['id']?>">
		<input type="text" name="kategori" value="<?= $data['name'] ?>"> <br/>
		<button name="submit">Update</button>	
	<?php endwhile; ?>
</form>


</body>
</html>