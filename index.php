<html>
<head>
  <title>Aplikasi CRUD PHP</title>
</head>
<body>
  <h1>Data Mahasiswa</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>

  <?php
  
  include "koneksi.php";
  
  $sql = $pdo->prepare("SELECT * FROM mahsiswa");
  $sql->execute(); 
  while($data = $sql->fetch()){ l

        <tr>;
         <td>.$data['NIM']."</td>";
         <td>.$data['Nama']."</td>";
         <td>.$data['Jenis_Kelamin']."</td>";
         <td>.$data['Telp']."</td>";
         <td>.$data['Alamat']."</td>";
         <td><a href='ubah.php?ID=".$data['ID']."'>Ubah</a></td>;
         <td><a href='hapus.php?ID=".$data['ID']."'>Hapus</a></td>;
        </tr>;
    
  }
  ?>
  </table>
</body>
</html>



