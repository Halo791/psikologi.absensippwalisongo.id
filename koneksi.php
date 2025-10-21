<?php
$host = "localhost";     // ganti sesuai server
$user = "psiunmerac_data";          // ganti sesuai user DB
$pass = "Berkah_25";              // ganti sesuai password DB
$db   = "psiunmerac_data"; // ganti sesuai nama database

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
