<?php
$db = mysqli_connect("localhost", "rin", "zal0192++!!", "phpdasar");

function query($query){
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
?>
