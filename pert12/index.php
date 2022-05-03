<?php
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

// cek tombol search
if (isset($_POST["search"])){
    $mahasiswa = search($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Admin</title>
</head>
<body>
    <div style="position: fixed;">
  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php">Tambah data Mahasiswa</a>
  <br><br>

    <form method="post" action="">
        <input type="text" placeholder="search" name="keyword">
        <button type="submit" name="search">Search</button>
    </form>
    <br/>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <td>No.</td>
      <td>Aksi</td>
      <td>Gambar</td>
      <td>Nama</td>
      <td>NIM</td>
      <td>Jurusan</td>
    </tr>
    <?php $i = 1 ?>
    <?php foreach($mahasiswa as $row): ?>
    <tr>
      <td><?= $i?></td>
      <td><a href="update.php?id=<?= $row["id"];?>">update</a> | <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin');">delete</a></td>
      <td><img src="../img/<?= $row["gambar"];?>"></td>
      <td><?= $row["nama"];?></td>
      <td><?= $row["nim"];?></td>
      <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </table>
    </div>
</body>
</html>
