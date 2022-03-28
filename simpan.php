<?php

include "koneksi.php";

$nis = $_POST['NIM'];
$nama = $_POST['Nama'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$telp = $_POST['Telp'];
$alamat = $_POST['Alamat'];

$sql = $pdo->prepare("INSERT INTO mahasiswa(NIM, Nama, Jenis_Kelamin, Telp, Alamat) VALUES(:NIM,:Nama,:jk,:Telp,:Alamat)");
$sql->bindParam(':NIM', $NIM);
$sql->bindParam(':Nama', $Nama);
$sql->bindParam(':jk', $Jenis_Kelamin);
$sql->bindParam(':Telp', $Telp);
$sql->bindParam(':Alamat', $Alamat);
$sql->execute(); 
if($sql){ 
  header("location: index.php");
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>