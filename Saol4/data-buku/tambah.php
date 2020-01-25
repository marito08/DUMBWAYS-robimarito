<?php

include('../connect.php');

$name = $_POST['name'];
$category = $_POST['category'];
$writer = $_POST['writer'];
$year = $_POST['year'];
$img = $_POST['img'];

$sql = "INSERT INTO book_tb values ('','$name','$category','$writer','$year','$img')";

$query = $pdo->prepare($sql);
$query->execute();

if($query == TRUE){
	header("Location:index.php");
}

?>