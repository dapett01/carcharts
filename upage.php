<?php

include('cars.php');
session_start();

if(!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}
else {
  echo '<p class="success">You are in now!</p>';
}

?>
