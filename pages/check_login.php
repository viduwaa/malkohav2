<?php
session_start();

include('config.php');

if (!isset($_SESSION['google_loggedin'])) {
  header("Location: https://" . $_SERVER['HTTP_HOST'] . "/malkohav2/");
  exit;
}
