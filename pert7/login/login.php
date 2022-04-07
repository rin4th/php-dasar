<?php
function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return data;
}

if (isset($_POST["submit"])){
  $_POST["username"] = validate($_POST["username"]);
  if ($_POST["username"] == "admin" && $_POST["password"] == "123"){
    header("Location: admin.php");
    exit;
  }else{
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
</head>
<body>
 <h1>Login Page</h1>
 <?php if (isset($error)) : ?>
 <p style="color: red; font-style: italic;">username/password yang anda masukan salah</p>
 <?php endif; ?>
 <ul>
   <form method="post">
     <li>
       <label for="username">username : </label>
       <input type"text" name="username" id="username">
     </li>
     <li>
       <label for="password">password : </label>
       <input type="password" name="password" id="password">
     </li>
     <input type="submit" value="submit" name="submit">
   </form>
 </ul>
</body>
</html>
