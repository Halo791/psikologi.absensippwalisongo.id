<?php
// Koneksi ke database (ganti sesuai konfigurasi Anda)
$host = "localhost";     // ganti sesuai server
$user = "abss9145_psikologi";          // ganti sesuai user DB
$pass = "Berkah_25";              // ganti sesuai password DB
$db   = "abss9145_psikologi"; // ganti sesuai nama database

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak valid.'); window.history.back();</script>";
        exit();
    }

    // Cek apakah email sudah terdaftar
    $check = $conn->prepare("SELECT id FROM subscribers WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('Email sudah terdaftar.'); window.history.back();</script>";
        exit();
    }

    // Simpan email ke database
    $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        echo "<script>alert('Berhasil subscribe! Terima kasih.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan email. Coba lagi.'); window.history.back();</script>";
    }

    $stmt->close();
    $check->close();
    $conn->close();
}
?>
