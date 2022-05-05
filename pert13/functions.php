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
     
    $gambar = upload();

  // query untuk menambahkan data
  $insert = "INSERT INTO mahasiswa
    (nama, nim, jurusan, gambar)
  VALUES(
  '$nama', '$nim', '$jurusan', '$gambar');";

  mysqli_query($db, $insert);

  return mysqli_affected_rows($db);
}

function upload(){
    $nameFile = $_FILES['gambar']["name"];
    $errorName = $_FILES['gambar']["error"];
    $tmpName = $_FILES['gambar']["tmp_name"];
    $sizeFile = $_FILES['gambar']["size"];

    // cek the file
    $ekstensionAllowed = ["jpg", "jpeg", "png"];
    $ekstensionFile = pathinfo($nameFile, PATHINFO_EXTENSION);
    
    $sizeAllowed = $sizeFile <= 1000000;
    // cek ekstension file
    if ( !in_array($ekstensionFile, $ekstensionAllowed) ){
        echo "
            <script>
                alert('Masukan file gambar jpg, jpeg, png');
            </script>     
        ";
        die;
    }else{
        // cek size file 
        if (!$sizeAllowed){
            echo "
             <script>
                alert('Masukan file gambar dengan size < 1mb');
              </script>     
             ";
            die;
        }else{
            $nameFileBaru = uniqid();
            $nameFileBaru .= $nameFile;
            move_uploaded_file($tmpName, '../img/' . $nameFileBaru);
            return $nameFileBaru;
        }
    }
}

function hapus($id){
  global $db;

  return mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
  }

function update($data){
  global $db;
  
// cek apakah tombol submit sudah ditekan atau tidak    
  $id       = $data["id"];
  $nim     = htmlspecialchars($data["nim"]);
  $nama    = htmlspecialchars($data["nama"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = upload();

  // query untuk update data
  $insert = "UPDATE mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($db, $insert);

  return mysqli_affected_rows($db);
}

function search($keyword){
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' or
                nim LIKE '%$keyword%' or
                jurusan LIKE '%$keyword%'";
    
    return query($query);
}
?>
