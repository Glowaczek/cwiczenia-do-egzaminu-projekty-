<?php
$conn = mysqli_connect('localhost','root','','baza');

$data = $_POST["data"];
$osoby = $_POST["osoby"];
$telefon = $_POST["telefon"];


$sql = "INSERT INTO rezerwacje VALUES (NULL, 1, $data, $osoby, $telefon);";

mysqli_query($conn,$sql);



mysqli_close($conn);

echo "dodano rezerwacje do bazy";
?>