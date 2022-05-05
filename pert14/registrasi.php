<?php
require "functions.php";

if (isset($_POST["registrasi"])){
    if (registrasi($_POST) > 0){
        echo "
        <script>
        alert('user baru berhasil ditambahkan');
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
    <ul style="list-style-type: none;">
        <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" required>
        </li>
        <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
        </li>
        <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required>
        </li>
        <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2" required>
        </li>
        <li>
                <button type="submit" name="registrasi">Registrasi</button>
    </ul>
    </form>
</body>
</html>
