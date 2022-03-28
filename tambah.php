<html>
<head>
  <title>Aplikasi CRUD PHP</title>
</head>
<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>NIM</td>
        <td><input type="text" name="NIM"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="Nama"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
        <input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="Jenis_Kelamin" value="Perempuan"> Perempuan
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="Telp"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="Alamat"></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>

