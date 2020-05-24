<?php
              //Denna koden använde vi inte i slut skedet, utan denna använde vi bara för att se så att inloggningen skulle fungera. Men vi använde oss av en liknande kod när vi skulle länka hemnsidan till inloggnings koden

              //Koden här skickar en bara vidare till en tom sida där det står "You are now loged in!" så vi kunde kolla om allt fungerade
include('carcharts.php');
session_start();

if(!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}
else {
  echo '<p class="success">You are now loged in!</p>';
}
?>
