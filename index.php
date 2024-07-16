<?php
session_start();

include('config.php');

if (!isset($_SESSION['google_loggedin'])) {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/login.php");
    exit;
} else {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/pages/home.php");
}
?>


<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" type="image/webp" href="/assets/icons/logo.webp">

    <link rel="preload" as="font" href="/assests/fonts/Extatica-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assests/fonts/Extatica-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <meta name="description" content="Malkoha & Friends - All Your Study Materials In One Place">
    <meta name="author" content="Malkoha & Friends Team">

    <meta property="og:title" content="Malkoha & Friends">
    <meta property="og:description" content="All Your Study Materials In One Place">
    <meta property="og:author" content="Malkoha & Friends Team">
    <meta property="og:image" content="/assets/icons/logo.webp">
    <meta property="og:url" content="https://malkoha.site">
    <meta property="og:type" content="website">

    <title>Malkoha & Friends</title>

</head>