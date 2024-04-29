<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
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
                    <h3>Please continue with: </h3>
                </div>
                <?php
                include(__DIR__ . '/pages/login.php');
                ?>
            </div>
            <p>Malkoha & Friends ©2024</p>
        </div>
    </div>
</body>

</html>