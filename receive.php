<?php
  $checkbox = $_POST["remember"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  if (isset($checkbox) && isset($email))
  {
    setcookie("username" , $remember , time() + (86400 * 2));
    setcookie("email" , $email , time() + (86400 * 2));
  }
?>


<!doctype html>

<html lang="sv">

  <head>
    <meta charset="utf-8">
    <title>receive.php</title>
  </head>

  <body>
    <?php
      if (isset($_COOKIE["username"])){
        echo 'Username: ' . $_COOKIE["username"];
      }
      if (isset($_COOKIE["email"])){
        echo '<br>Email: ' . $_COOKIE["email"];
      }
    ?>
  </body>

</html>
