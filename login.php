<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Gunakan hash aman seperti password_hash di sistem nyata

    $q = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($q->num_rows > 0) {
        $_SESSION['login'] = true;
        header("Location: admin.php");
    } else {
        $error = "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { padding: 30px; border: 1px solid #ccc; border-radius: 8px; }
        input { margin-bottom: 10px; width: 100%; padding: 8px; }
    </style>
</head>
<body>
    <form method="post">
        <h3>Login Admin</h3>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </form>
</body>
</html>
