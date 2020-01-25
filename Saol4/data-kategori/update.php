<?php

include('../connect.php');

$id = $_POST['id'];
$kategori = $_POST['kategori'];

$sql = "UPDATE category_tb SET name='$kategori' where id='$id'";

$query = $pdo->prepare($sql);
$query->execute();

if($query == TRUE){
	header("Location:index.php");
}

?>