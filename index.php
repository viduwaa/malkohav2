<?php
session_start();

include('.pages/config.php');

if (!isset($_SESSION['google_loggedin'])) {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/login.php");
    exit;
} else {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/pages/home.php");
}
?>