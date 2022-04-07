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
  <title>latihan Array</title>
</head>
<body>
  <h1>Daftar Laptop</h1>
<?php foreach( $laptop as $lap ): ?> 
    <ul>
      <li><img src="<?= $lap["photo"];?>"></li>
      <li><?= $lap["merk"];?></li>
      <li><?= $lap["os"];?></li>
      <li><?= $lap["proc"];?></li>
      <li><?= $lap["series"];?></li>
      <li><?= $lap["webcam"];?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>
