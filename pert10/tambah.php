<?php
// koneksi ke DBMS
require "functions.php";

if (isset($_POST["submit"])){
  if (tambah($_POST) > 0){
    echo "
    <script>
     alert('data berhasil ditambahkan');
     document.location.href = 'index.php';
    </script>
    ";
  }else{
    echo "
    <script>
     alert('data gagal ditambahkan');
    </script>
    ";
    mysqli_error($db);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah data Mahasiswa</title>
</head>
<body>
 <h1>Tambah data mahasiswa</h1>

 <form action="" method="post">
   <ul style="list-style-type: none;">
     <li>
       <label for="nim">NIM : </label>
       <input type="text" name="nim" id="nim" required>
     </li>
     <li>
       <label for="nama">Nama : </label>
       <input type="text" name="nama" id="nama" required>
     </li>
     <li>
       <label for="jurusan">Jurusan : </label>
       <input type="text" name="jurusan" id="jurusan" required>
     </li>
     <li>
       <label for="gambar">Gambar : </label>
       <input type="text" name="gambar" id="gambar" required>
     </li>
     <li>
       <button type="submit" name="submit">Submit</button>
     </li>
   </ul>
 </form>
</body>
</html>
