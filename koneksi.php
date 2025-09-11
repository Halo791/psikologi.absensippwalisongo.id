<?php
$host = "localhost";     // ganti sesuai server
$user = "root";          // ganti sesuai user DB
$pass = "";              // ganti sesuai password DB
$db   = "abss9145_psikologi"; // ganti sesuai nama database

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
