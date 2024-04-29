<?php

session_start();
include('config.php');
require_once(dirname(__DIR__) . '../vendor/autoload.php');

$client = new Google\Client();
$client->setAuthConfig(dirname(__DIR__) . '/pages/client_secrets.json');
$client->addScope('profile');
$client->addScope('email');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/malkohav2/pages/login.php');


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
