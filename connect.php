<?php 
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = 'quanlydathang';
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
else {
    // echo"ok";
}
function ToPrice($Gia) {
    $change = number_format($Gia, 0, ',', '.');
    return $change;
}