<?php
session_start();

include('config.php');

if (!isset($_SESSION['google_loggedin'])) {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/login-page.php");
    exit;
} else {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/pages/home.php");
}
?>