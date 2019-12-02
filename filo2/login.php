<?php
session_start();
require_once("apps.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style/login.css" type="text/css">
  <link rel="stylesheet" href="style/font-awesome.css" type="text/css"/>
</head>
<h2>Silahkan Login</h2>
<form action="" method="POST">
  <div class="imgcontainer">
    <img src="" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Masukkan Username" name="username" id="username">

    <label><b>Password</b></label>
    <input type="password" placeholder="Masukan Password" name="pass" id="password">
        
    <button type="submit" name="login" value="Login">Login</button>
    
  </div>
  </div>
</form>
</body>
</html>
