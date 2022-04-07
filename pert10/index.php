<?php
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

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
      <td><a href="#">update</a> | <a href="#">delete</a></td>
      <td><img src="img/<?= $row["gambar"];?>"></td>
      <td><?= $row["nama"];?></td>
      <td><?= $row["nim"];?></td>
      <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </table>
</body>
</html>
