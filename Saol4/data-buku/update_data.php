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
<h1>Tambah data</h1>
<form action="update.php" method="POST">
	<?php while($data = $sql->fetch()) :?>
		<label>Name</label>
		<input type="hidden" name="id" value="<?= $data['id']?>">
		<input type="text" name="name" value="<?= $data['name'] ?>"> <br/>
		<label>Category id</label>
		<input type="number" name="category" value="<?= $data['category_id'] ?>"> <br/>
		<label>Writer id</label>
		<input type="number" name="writer" value="<?= $data['writer_id'] ?>"> <br/>
		<label>Year</label>
		<input type="number" name="year" value="<?= $data['publication_year'] ?>"> <br/>
		<label>Image</label>
		<input type="text" name="img" value="<?= $data['img'] ?>"> <br/>
		<button name="submit">Tambah</button>	
	<?php endwhile; ?>
</form>


</body>
</html>