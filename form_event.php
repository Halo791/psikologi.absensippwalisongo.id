<?php
include 'koneksi.php';
$id = $_GET['id'] ?? '';
$data = ['category'=>'', 'title'=>'', 'event_date'=>'', 'description'=>'', 'location'=>'', 'link'=>'', 'tag'=>''];
if ($id) {
    $sql = $conn->query("SELECT * FROM events WHERE id=$id");
    $data = $sql->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $id ? 'Edit Event' : 'Tambah Event' ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3><?= $id ? 'Edit Event' : 'Tambah Event' ?></h3>
    <form action="save_event.php" method="post" enctype="multipart/form-data">
      <?php if ($id): ?>
        <input type="hidden" name="id" value="<?= $id ?>">
      <?php endif; ?>

      <div class="mb-3">
      <label>Kategori</label>
      <select name="category" class="form-control">
        <option value="featured" <?= $data['category'] == 'featured' ? 'selected' : '' ?>>Featured</option>
        <option value="recent" <?= $data['category'] == 'recent' ? 'selected' : '' ?>>Recent</option>
        <option value="upcoming" <?= $data['category'] == 'upcoming' ? 'selected' : '' ?>>Upcoming</option>
      </select>
    </div>
      <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control">
      </div>
      <div class="mb-3">
        <label>Tanggal Event</label>
        <input type="date" name="event_date" value="<?= $data['event_date'] ?>" class="form-control">
      </div>
      <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control"><?= $data['description'] ?></textarea>
      </div>
      <div class="mb-3">
        <label>Lokasi</label>
        <input type="text" name="location" value="<?= $data['location'] ?>" class="form-control">
      </div>
      <div class="mb-3">
        <label>Link</label>
        <input type="url" name="link" value="<?= $data['link'] ?>" class="form-control">
      </div>
      <div class="mb-3">
        <label>Tag</label>
        <input type="text" name="tag" value="<?= $data['tag'] ?>" class="form-control">
      </div>
      <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="image" class="form-control">
      </div>
      <button class="btn btn-success"><?= $id ? 'Update' : 'Tambah' ?> Event</button>
    </form>
  </div>
</body>
</html>
