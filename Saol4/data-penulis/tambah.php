<?php

include('../connect.php');

$name = $_POST['name'];

$sql = "INSERT INTO writer_tb values ('','$name')";

$query = $pdo->prepare($sql);
$query->execute();

if($query == TRUE){
	header("Location:index.php");
}

?>