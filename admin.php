<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Psikologi Unmer</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
  }

  .sidebar {
    width: 230px;
    background-color: #2c3e50;
    color: white;
    height: 100vh;
    padding-top: 20px;
    position: fixed;
  }

  .sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .sidebar ul {
    list-style: none;
    padding: 0;
  }

  .sidebar ul li {
    padding: 10px 20px;
  }

  .sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
  }

  .sidebar ul li a:hover {
    background-color: #34495e;
  }

  .main-content {
    margin-left: 230px;
    padding: 20px;
    width: 100%;
    background-color: #ecf0f1;
    min-height: 100vh;
  }

  .card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }

  .success {
    background-color: #27ae60;
    color: white;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
  }

  .badge {
    padding: 5px 10px;
    border-radius: 5px;
    color: white;
  }
  .bg-featured { background-color: #2980b9; }
  .bg-recent { background-color: #27ae60; }
  .bg-upcoming { background-color: #f39c12; }
</style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h2>Admin Psikologi Unmer</h2>
  <ul>
    <li><a href="admin.php?page=dashboard">🏠 Dashboard</a></li>
    <li><a href="admin.php?page=surat">📄 Pengajuan Surat</a></li>
    <li><a href="admin.php?page=events">🎉 Event Page</a></li>
    <li><a href="logout.php">🚪 Logout</a></li>
  </ul>
</div>

<!-- Main Content -->
<div class="main-content">
  <?php
  // Menentukan halaman yang ditampilkan
  $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

  switch ($page) {
      case "surat":
          include "pages/surat.php"; // CRUD Pengajuan Surat
          break;

      case "events":
          include "pages/events.php"; // CRUD Event/News
          break;

      case "dashboard":
      default:
          echo "<div class='card'><h2>Selamat Datang di Admin Panel</h2>
                <p>Pilih menu di sidebar untuk mulai mengelola data.</p></div>";
          break;
  }
  ?>
</div>

</body>
</html>
