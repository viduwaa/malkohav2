<?php
date_default_timezone_set('Asia/Colombo');

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "malkohav2";

$conn = mysqli_connect($server, $username, $password, $dbname);

/* if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}else{
    echo "Connected successfully";
} */


?>