<?php require 'header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>SPC Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="assets/css/style.css" />

  </head>
  <body>

<form class="box" action='logininc.php' method='post'>
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="loginbutton" value="Login">
  <?php require 'footer.php'; ?>
</form>

  </body>

</html>
