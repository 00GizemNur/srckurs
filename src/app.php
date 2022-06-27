<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "drivercourse";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) die("Bağlantı başarısız: " . mysqli_connect_error());

function view($file, $data = [])
{
    extract($data);
    require "./src/Views/header.php";
    require "./src/Views/$file.php";
    require "./src/Views/footer.php";
}