<?php

include "koneksi.php";

$ID = $_GET['ID'];

$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Telp = $_POST['Telp'];
$Alamat = $_POST['Alamat'];

$sql = $pdo->prepare("UPDATE mahasiswa SET NIM=:NIM,Nama=:Nama, Jenis_Kelamin=:jk, Telp=:Telp, Alamat=:Alamat WHERE ID=:ID");
$sql->bindParam(':NIM', $NIM);
$sql->bindParam(':Nama', $Nama);
$sql->bindParam(':jk', $Jenis_Kelamin);
$sql->bindParam(':Telp', $Telp);
$sql->bindParam(':Alamat', $Alamat);
$sql->bindParam(':ID', $ID);
$execute = $sql->execute(); 
if($execute){ 
  header("location: index.php"); 
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>

