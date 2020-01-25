<?php
include('../connect.php');
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM book_tb WHERE id='$id'");
$sql->execute();
header('Location:index.php');
?>