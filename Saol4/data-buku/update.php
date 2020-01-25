<?php

include('../connect.php');

$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$writer = $_POST['writer'];
$year = $_POST['year'];
$img = $_POST['img'];

$sql = "UPDATE book_tb SET name='$name', category_id='$category', writer_id ='$writer', publication_year='$year', img='$img' where id='$id'";

$query = $pdo->prepare($sql);
$query->execute();

if($query == TRUE){
	header("Location:index.php");
}

?>