<?php

session_start();

include('./pages/config.php');
require_once('./vendor/autoload.php');


?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" type="image/webp" href="/assets/icons/logo.webp">

    <link rel="preload" as="font" href="/assets/fonts/Extatica-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/Extatica-Bold.woff2" type="font/woff2" crossorigin="anonymous">
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



<body>

    <div class="home">

        <div class="wrapper">

            <div>

                <img src="./assets/icons/logo.webp" alt="logo">

            </div>

            <div>

                <div style="text-align: center;margin-bottom: 1rem;">

                    <h2>Welcome !</h2>

                    <h3 class="use-email">Please continue with your <span>Student email</span></h3>



                </div>

                <?php include "./google-oauth.php"; ?>



            </div>

            <div>
                <h3 style="text-align: center;text-wrap: nowrap;font-size:1rem;font-weight: 300;padding-top: 1rem;color: aqua;">🫥 Bug fixed - New users now can login
                </h3>
            </div>

            <p style="color:#fff;">Malkoha & Friends ©2024</span>

        </div>

        <div class="malkoha-gaming">
            <h2>
                Try<a href="https://games.malkoha.site"> Malkoha Gaming</a>
            </h2>
            <img src="./assets/icons/open_inew.svg" alt="">
        </div>

    </div>

</body>



</html>