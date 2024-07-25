<?php
session_start();

include('config.php');

if (!isset($_SESSION['google_loggedin'])) {
  header("Location: https://" . $_SERVER['HTTP_HOST'] . "/malkohav2/");
  exit;
}


$stmt = $conn->prepare("SELECT * FROM accounts WHERE id = ?");
$stmt->bind_param("s", $_SESSION['google_id']);
$stmt->execute();

$result = $stmt->get_result();
$account = $result->fetch_assoc();

$name = $account['name'];
$email = $account['email'];
$picture = $account['picture'];
$registered = $account['registered'];

$stmt->close();


