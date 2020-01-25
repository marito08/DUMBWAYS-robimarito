<?php

include('../connect.php');

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE writer_tb SET name='$name' where id='$id'";

$query = $pdo->prepare($sql);
$query->execute();

if($query == TRUE){
	header("Location:index.php");
}

?>