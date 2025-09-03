<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }
        h2 {
            text-align: center;
        }
        a.button {
            display: inline-block;
            padding: 8px 16px;
            background: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        a.logout {
            float: right;
            margin-top: -40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px #ccc;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            vertical-align: top;
        }
        th {
            background: #007BFF;
            color: white;
        }
        td img {
            border-radius: 4px;
        }
        .action-icons a {
            margin-right: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Admin Panel - Events</h2>
<a href="form_event.php" class="button">➕ Tambah Event</a>
<a href="logout.php" class="button logout">🚪 Logout</a>

<table>
    <tr>
        <th>Image</th>
        <th>Category</th>
        <th>Title</th>
        <th>Date</th>
        <th>Description</th>
        <th>Location</th>
        <th>Link</th>
        <th>Tag</th>
        <th>Action</th>
    </tr>
<?php
$sql = "SELECT * FROM events ORDER BY event_date DESC";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()):
?>
    <tr>
        <td><img src="uploads/<?= $row['image'] ?>" width="100"></td>
        <td><?= $row['category'] ?></td>
        <td><?= $row['title'] ?></td>
        <td><?= $row['event_date'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['location'] ?></td>
        <td><a href="<?= $row['link'] ?>" target="_blank">Link</a></td>
        <td><?= $row['tag'] ?></td>
        <td class="action-icons">
            <a href="form_event.php?id=<?= $row['id'] ?>">✏️</a>
            <a href="delete_event.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">🗑️</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>

</body>
</html>
