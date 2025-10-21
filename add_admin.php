<?php
include 'koneksi.php';

// data admin baru
$username = "admin";
$password = "admin123"; // ubah sesuai kebutuhan
$role     = "admin";

// hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// cek dulu apakah username sudah ada
$check = $conn->prepare("SELECT id FROM users WHERE username=?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "❌ Username '$username' sudah ada di database!";
} else {
    // insert user baru
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashedPassword, $role);

    if ($stmt->execute()) {
        echo "✅ User admin berhasil ditambahkan!<br>";
        echo "Username: <b>$username</b><br>";
        echo "Password: <b>$password</b><br>";
    } else {
        echo "❌ Gagal menambahkan user admin: " . $stmt->error;
    }

    $stmt->close();
}

$check->close();
$conn->close();
?>
