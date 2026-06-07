<?php
$host = getenv('DB_HOST') ?: "localhost";     // ganti sesuai server
$user = getenv('DB_USER') ?: getenv('DB_USERNAME') ?: "psiunmerac_data";          // ganti sesuai user DB
$pass = getenv('DB_PASS') ?: getenv('DB_PASSWORD') ?: "Berkah_25";              // ganti sesuai password DB
$db   = getenv('DB_NAME') ?: getenv('DB_DATABASE') ?: "psiunmerac_data"; // ganti sesuai nama database
$port = getenv('DB_PORT') ?: null;

$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
