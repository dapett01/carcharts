<?php
              //Koden används för att kunna logga in på hemsidan
include('carcharts.php');
session_start();

if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM login WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

          if (!$result){
              echo '<p class="error">Username, password combination is wrong</p>';
          }
    	    else{
              if (password_verify($password, $result['password']))
      		{

              //Koden gör så att man antingen försvidare till hemsidan om man skrivit in rätt information eller så stannart man kvar och måste srkiva om inloggnings inforationen om man skrivit fel
              $_SESSION['user_id'] = $result['username'];
              header('Location: upage.php');
          }
    		else{
              echo '<p class="error">Username password combination is wrong!</p>';
        }

    }
}

?>


            <!-- Koden under används för att bygga upp en struktur på en inloggnings sida. Så man enkelt kan logga in -->

<html lang="sv">

<head>
  <meta charset="utf-8"/>
  <title>carcharts</title>
  <link rel="stylesheet" href="style.css">
</head>

  <body>

    <form action="login.php" method="post" class="profile">

      <fieldset>
        <legend>Sign in</legend>
          <ol>
            <li>
              <label for="username">Username:</label>
              <input type="username" name="username">
            </li>
            <li>
              <label for="email">Email:</label>
              <input type="email" name="email">
            </li>
            <li>
              <label for="password">Password:</label>
              <input type="password" name="password">
            </li>
            <li>
              <label for="remember">Remember:</label>
              <input name="remember" type="checkbox">
            </li>
          </ol>
        <legend>
            <input type="submit" name="login" value="Send">
        </legend>
      </fieldset>

    </form>

  </body>

</html>
