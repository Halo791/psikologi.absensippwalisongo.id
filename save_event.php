<?php
include 'koneksi.php';

$id = $_POST['id'] ?? null;
$category = $_POST['category'];
$title = $_POST['title'];
$event_date = $_POST['event_date'];
$description = $_POST['description'];
$location = $_POST['location'];
$link = $_POST['link'];
$tag = $_POST['tag'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

if ($image) {
    $target = "uploads/" . basename($image);
    move_uploaded_file($tmp, $target);
}

if ($id) {
    $sql = "UPDATE events SET category=?, title=?, event_date=?, description=?, location=?, link=?, tag=?";
    if ($image) {
        $sql .= ", image=?";
    }
    $sql .= " WHERE id=?";
    $stmt = $conn->prepare($sql);
    if ($image) {
        $stmt->bind_param("ssssssssi", $category, $title, $event_date, $description, $location, $link, $tag, $image, $id);
    } else {
        $stmt->bind_param("sssssssi", $category, $title, $event_date, $description, $location, $link, $tag, $id);
    }
} else {
    $stmt = $conn->prepare("INSERT INTO events (category, title, event_date, description, location, link, tag, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $category, $title, $event_date, $description, $location, $link, $tag, $image);
}
$stmt->execute();
header("Location: admin.php");
