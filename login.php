<?php



session_start();

include('./pages/config.php');



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
    <meta property="og:description" content="Malkoha & Friends - All Your Study Materials In One Place">
    <meta property="og:author" content="Malkoha & Friends Team">
    <meta property="og:image" content="/assets/icons/logo.webp">

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

                <a href="google-oauth.php" class="login-btn">Login With Google</a>

            </div>

            <p>Malkoha & Friends ©2024</p>

        </div>

    </div>

</body>



</html>