<?php
$db = mysqli_connect("localhost", "rin", "zal0192++!!", "phpdasar");

// connect mysqli
function query($query){
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data){
  global $db;
  
// cek apakah tombol submit sudah ditekan atau tidak
  $nim     = htmlspecialchars($data["nim"]);
  $nama    = htmlspecialchars($data["nama"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar  = htmlspecialchars($data["gambar"]);

  // query untuk menambahkan data
  $insert = "INSERT INTO mahasiswa
    (nama, nim, jurusan, gambar)
  VALUES(
  '$nama', '$nim', '$jurusan', '$gambar');";

  mysqli_query($db, $insert);

  return mysqli_affected_rows($db);
}

function hapus($id){
  global $db;

  return mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
  }
?>
