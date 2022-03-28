<?php
$host = "localhost"; 
$username = "root"; 
$password = "12345678"; 
$database = "mahasiswa"; 

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
