<?php
$laptop = [
  [
    "merk" => "hp",
    "os" => "windows",
    "proc" => "intel i3",
    "webcam" => "ada",
    "series" => "gaming",
    "photo" => "img/uruma.jpg"
  ],
  [
    "merk" => "asus",
    "os" => "windows",
    "proc" => "amd",
    "webcam" => "ada",
    "series" => "rog",
    "photo" => "img/reimu.jpg"
  ],
  [
    "merk" => "lenovo",
    "os" => "linux",
    "proc" => "intel i7",
    "webcam" => "tidak ada",
    "series" => "thinkpad",
    "photo" => "img/elaina.jpg"
  ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan Get 1</title>
</head>
<body>
 <h1>Daftar Laptop</h1>
 <ul>
 <?php foreach ($laptop as $lap): ?>
   <li>
     <a href="get2.php?merk=<?= $lap["merk"];?>&os=<?= $lap["os"];?>&proc=<?= $lap["proc"];?>&image=<?= $lap["photo"];?>&webcam=<?= $lap["webcam"];?>&series=<?= $lap["series"];?>"><?= $lap["merk"]; ?></a>
   </li>
 <?php endforeach; ?>
 </ul>
</body>
</html>
