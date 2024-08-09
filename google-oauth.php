<?php
include('./pages/config.php');
require_once('./vendor/autoload.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//$clientId = getenv('GOOGLE_CLIENT_ID');
//$clientSecret = getenv('GOOGLE_CLIENT_SECRET');

$client = new Google\Client();
$client->setAuthConfig('./pages/secured/client_secrets.json');
//$client->setClientId($clientId);
//$client->setClientSecret($clientSecret);
$client->addScope('profile');
$client->addScope('email');

$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/malkohav2/google-oauth.php');
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}

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
    $profile_pic = $google_info->picture;

    $stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $account = $result->fetch_assoc();

    if ($account) {
        $id = $account['id'];
        $stmt = $conn->prepare("UPDATE accounts SET last_login = CURRENT_TIMESTAMP, logged_times = logged_times+1 WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
    } else {
        $stmt = $conn->prepare("INSERT INTO accounts (email, name,picture) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $name, $profile_pic);
        $stmt->execute();
        $id = $conn->insert_id;
    }

    session_regenerate_id();
    $_SESSION['google_id'] = $id;
    $_SESSION['google_loggedin'] = TRUE;
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/pages/home.php");

    $stmt->close();
    $conn->close();
}
