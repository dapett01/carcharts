<?php

include('carscharts.php');
session_start();

if(!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}
else {
  echo '<p class="success">You are now loged in!</p>';
}

?>
