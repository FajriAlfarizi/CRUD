<?php

include "koneksi.php";

$ID = $_GET['ID'];

$sql = $pdo->prepare("DELETE FROM mahasiswa WHERE ID=:ID");
$sql->bindParam(':ID', $ID);
$execute = $sql->execute(); 
if($execute){ 
  header("location: index.php"); 
}else{
  
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>