<?php 

$host = "localhost";
$db = "blog";
$usuario = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$usuario,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>