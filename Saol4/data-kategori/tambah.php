<?php

include('../connect.php');

$kategori = $_POST['kategori'];

$sql = "INSERT INTO category_tb values ('','$kategori')";

$query = $pdo->prepare($sql);
$query->execute();

if($query == TRUE){
	header("Location:index.php");
}

?>