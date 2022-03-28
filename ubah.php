<html>
<head>
  <title>Aplikasi CRUD PHP</title>
</head>
<body>
  <h1>Ubah Data Mahasiswa</h1>
  <?php
 
  include "koneksi.php";
  
  $id = $_GET['id'];
  
  $sql = $pdo->prepare("SELECT * FROM mahasiswa WHERE id=:id");
  $sql->bindParam(':ID', $ID);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $ID; ?>">
    <table cellpadding="8">
      <tr>
        <td>NIS</td>
        <td><input type="text" name="NIM" value="<?php echo $data['NIM']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
        <?php
        if($data['Jenis_Kelamin'] == "Laki-laki"){
          echo "<input type='radio' name='Jenis_Kelamin' value='Laki-laki' checked='checked'> Laki-laki";
          echo "<input type='radio' name='Jenis_Kelamin' value='Perempuan'> Perempuan";
        }else{
          echo "<input type='radio' name='Jenis_Kelamin' value='Laki-laki'> Laki-laki";
          echo "<input type='radio' name='Jenis_Kelamin' value='Perempuan' checked='checked'> Perempuan";
        }
        ?>
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="Telp" value="<?php echo $data['Telp']; ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="Alamat"><?php echo $data['Alamat']; ?></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>