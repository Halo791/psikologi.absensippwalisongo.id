<?php
include 'koneksi.php';
$id = $_GET['id'];
$conn->query("DELETE FROM events WHERE id=$id");
header("Location: admin.php");
