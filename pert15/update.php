<?php
// koneksi ke DBMS
require "functions.php";

if (isset($_POST["submit"])){
  if (update($_POST) > 0){
    echo "
    <script>
     alert('data berhasil diupdate');
     document.location.href = 'index.php';
    </script>
    ";
  }else{
    echo "
    <script>
     alert('data gagal diupdate');
    </script>
    ";
    mysqli_error($db);
  }
}

// ambil data dari mahasiswa
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update data Mahasiswa</title>
</head>
<body>
 <h1>Update data mahasiswa</h1>

 <form action="" method="post" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?= $mhs["id"]?>">
   <ul style="list-style-type: none;">
     <li>
       <label for="nim">NIM : </label>
       <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]?>" required>
     </li>
     <li>
       <label for="nama">Nama : </label>
       <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" required>
     </li>
     <li>
       <label for="jurusan">Jurusan : </label>
       <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]?>" required>
     </li>
     <li>
       <label for="gambar">Gambar : </label>
       <img src="../img/<?= $mhs["gambar"]?>" width="50px" height="50px">
       <input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]?>" required>
     </li>
     <li>
       <button type="submit" name="submit">Submit</button>
     </li>
   </ul>
 </form>
</body>
</html>
