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
    <title>Document</title>
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



                $client = new Google\Client();
                $client->setAuthConfig('./pages/client_secrets.json');
                $client->addScope('profile');
                $client->addScope('email');
                $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/malkohav2/login.php');


                if (!isset($_GET['code'])) {
                    $auth_url = $client->createAuthUrl();
                    echo "<a href='" . filter_var($auth_url, FILTER_SANITIZE_URL) . "'class=\"login-btn\">Login With Google </a>";
                } else {
                    $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                    $client->setAccessToken($accessToken);

                    $gauth = new Google\Service\Oauth2($client);
                    $google_info = $gauth->userinfo->get();
                    $email = $google_info->email;
                    $name = $google_info->name;

                    $stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();

                    $result = $stmt->get_result();
                    $account = $result->fetch_assoc();

                    if ($account) {
                        $id = $account['id'];
                    } else {
                        $stmt = $conn->prepare("INSERT INTO accounts (email, name) VALUES (?, ?)");
                        $stmt->bind_param("ss", $email, $name);
                        $stmt->execute();
                        $id = $conn->insert_id;
                    }

                    session_regenerate_id();
                    $_SESSION['google_id'] = $id;
                    $_SESSION['google_loggedin'] = TRUE;
                    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2");

                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>
            <p>Malkoha & Friends ©2024</p>
        </div>
    </div>
</body>

</html>