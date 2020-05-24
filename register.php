<?php

include('carcharts.php');
session_start();

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM carcharts WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO login(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
			header('Location: login.php');
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>
<html>

<head>
  <meta charset="utf-8"/>
  <title>Create an account</title>
  <link rel="stylesheet" href="style.css">
</head>

<form method="post" action="" name="signup-form">

<fieldset>

  <legend>Create an account</legend>

  <div class="form-element">
    <label>Username:</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Email:</label>
    <input type="email" name="email" required />
  </div>
  <div class="form-element">
    <label>Password:</label>
    <input type="password" name="password" required />
  </div>

  <button type="submit" name="register" value="register">Register</button>

</fieldset>

</form>

</html>
