<?php
if (!isset($_GET["merk"]) || (!isset($_GET["os"])) || (!isset($_GET["proc"])) || (!isset($_GET["webcam"])) || (!isset($_GET["series"])) || (!isset($_GET["image"]))) {
  header("Location: get1.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Identitas Laptop</title>
</head>
<body>
 <h1>Spesifikasi Laptop</h1>
 <ul>
   <li><img src="<?= $_GET["image"];?>"></li>
   <li><?= $_GET["merk"];?></li>
   <li><?= $_GET["os"];?></li>
   <li><?= $_GET["proc"];?></li>
   <li><?= $_GET["webcam"];?></li>
   <li><?= $_GET["series"];?></li>
 </ul>

 <a href="get1.php">balik lagi</a>
</body>
</html>
