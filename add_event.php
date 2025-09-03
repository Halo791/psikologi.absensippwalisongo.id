<?php
include 'db.php';

$title = $_POST['title'];
$excerpt = $_POST['excerpt'];
$content = $_POST['content'];
$category = $_POST['category'];
$location = $_POST['location'];
$date = $_POST['date'];

$target = "uploads/";
$image_name = basename($_FILES["image"]["name"]);
$target_file = $target . $image_name;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$query = "INSERT INTO events (title, excerpt, content, category, location, date, image) 
          VALUES ('$title', '$excerpt', '$content', '$category', '$location', '$date', '$image_name')";
mysqli_query($conn, $query);

header("Location: admin.php?success=1");
