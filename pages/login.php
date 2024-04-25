<?php
include('config.php');
require_once(dirname(__DIR__) . '../vendor/autoload.php');

$client = new Google\Client();
$client->setAuthConfig(dirname(__DIR__) . '/pages/client_secrets.json');
$client->addScope('profile');
$client->addScope('email');

if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  echo "<a href='" . filter_var($auth_url, FILTER_SANITIZE_URL) . "'class=\"login-btn\">Login With Google </a>";
  
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';

  $gauth = new Google\Service\Oauth2($client);
  $google_info = $gauth->userinfo->get();

  $email = $google_info->email;
  $name = $google_info->name;

  echo "Welcome" . $name;
}
