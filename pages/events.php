<?php
require_once __DIR__ . '/../koneksi.php';

// --- Tambah / Update data ---
if(isset($_POST['simpan'])){
    $id         = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $category   = mysqli_real_escape_string($conn, $_POST['category']);
    $title      = mysqli_real_escape_string($conn, $_POST['title']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $description= mysqli_real_escape_string($conn, $_POST['description']);
    $location   = mysqli_real_escape_string($conn, $_POST['location']);
    $link       = mysqli_real_escape_string($conn, $_POST['link']);
    $tag        = mysqli_real_escape_string($conn, $_POST['tag']);

    // upload gambar
    $image = "";
    if(!empty($_FILES['image']['name'])){
        $image = time()."_".basename($_FILES['image']['name']);
        $target = __DIR__ . "/../uploads/".$image;
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    if($id > 0){ 
        // UPDATE
        if($image) {
            $sql = "UPDATE events SET category='$category', title='$title', event_date='$event_date',
                    description='$description', location='$location', link='$link', tag='$tag', image='$image'
                    WHERE id=$id";
        } else {
            $sql = "UPDATE events SET category='$category', title='$title', event_date='$event_date',
                    description='$description', location='$location', link='$link', tag='$tag'
                    WHERE id=$id";
        }
    } else {
        // INSERT
        $sql = "INSERT INTO events (category, title, image, description, event_date, location, link, tag) 
                VALUES ('$category','$title','$image','$description','$event_date','$location','$link','$tag')";
    }

    if(mysqli_query($conn, $sql)){
        header("Location: admin.php?page=events&status=sukses");
        exit;
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}

// --- Hapus data ---
if(isset($_GET['hapus'])){
    $id = intval($_GET['hapus']);
    mysqli_query($conn, "DELETE FROM events WHERE id=$id") or die("Hapus gagal: ".mysqli_error($conn));
    header("Location: admin.php?page=events&status=hapus");
    exit;
}

// --- Ambil semua data events untuk JavaScript ---
$events_data = [];
$result = mysqli_query($conn, "SELECT * FROM events");
if($result && mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $events_data[$row['id']] = $row;
    }
}
?>

<!-- CSS Styles -->
<style>
.table-modern {
  width:100%;
  border-collapse:collapse;
  background:#fff;
  border-radius:8px;
  overflow:hidden;
  box-shadow:0 2px 6px rgba(0,0,0,0.1);
}
.table-modern th {
  background:#2c3e50;
  color:#fff;
  text-align:left;
  padding:12px;
}
.table-modern td {
  padding:12px;
  border-top:1px solid #eee;
}
.table-modern tr:hover { background:#f9f9f9; }

.badge {
  padding:5px 10px;
  border-radius:12px;
  font-size:12px;
  font-weight:bold;
}
.bg-featured { background:#2980b9; color:#fff; }
.bg-recent   { background:#27ae60; color:#fff; }
.bg-upcoming { background:#f39c12; color:#fff; }

.modal {
  display:none; position:fixed; z-index:1000; left:0; top:0;
  width:100%; height:100%; background:rgba(0,0,0,0.6); overflow:auto;
}
.modal-content {
  background:#fff; margin:3% auto; padding:20px 25px;
  border-radius:10px; width:600px; max-width:95%;
  box-shadow:0 5px 15px rgba(0,0,0,0.3);
  animation: fadeIn 0.3s ease;
}
.modal-header {
  display:flex; justify-content:space-between; align-items:center;
  border-bottom:1px solid #eee; margin-bottom:15px;
}
.modal-header h3 { margin:0; font-size:18px; font-weight:600; }
.close { cursor:pointer; font-size:22px; font-weight:bold; color:#555; }
.close:hover { color:#000; }
.modal-content input,
.modal-content select,
.modal-content textarea {
  width:100%; padding:10px 12px; margin-bottom:15px;
  border:1px solid #ddd; border-radius:6px; font-size:14px;
}
.modal-content input:focus,
.modal-content select:focus,
.modal-content textarea:focus {
  border-color:#2980b9;
  outline:none; box-shadow:0 0 4px rgba(41,128,185,0.4);
}
.btn-submit {
  background:#27ae60; color:#fff; border:none; padding:10px;
  width:100%; border-radius:6px; font-size:15px; cursor:pointer;
}
.btn-submit:hover { background:#219150; }
.btn-add {
  padding:10px 15px; background:#2980b9; color:white;
  border:none; border-radius:6px; cursor:pointer;
  margin-bottom:15px;
}
@keyframes fadeIn {
  from {opacity:0; transform:translateY(-20px);}
  to {opacity:1; transform:translateY(0);}
}
.bg-arsip { background:#7f8c8d; color:#fff; }

.alert {
    padding: 12px 15px;
    border-radius: 6px;
    margin-bottom: 15px;
    font-weight: 500;
}
.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.alert-error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
</style>

<div class="card">
  <h2>🎉 Kelola Event</h2>
  <button onclick="openModal('tambah')" class="btn-add">+ Tambah Event</button>
  
  <!-- Notifikasi -->
  <?php if(isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
    <div class="alert alert-success">
        ✅ Data event berhasil disimpan!
    </div>
  <?php endif; ?>
  
  <?php if(isset($error)): ?>
    <div class="alert alert-error">
        ❌ <?php echo $error; ?>
    </div>
  <?php endif; ?>
</div>

<div class="card">
  <h3>📋 Daftar Event</h3>
  <table class="table-modern">
    <thead>
      <tr>
        <th>No</th>
        <th>Category</th>
        <th>Title</th>
        <th>Date</th>
        <th>Description</th>
        <th>Location</th>
        <th>Image</th>
        <th>Link</th>
        <th>Tag</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    $result = mysqli_query($conn, "SELECT * FROM events ORDER BY id DESC");
    if($result && mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                  <td>".$no++."</td>
                  <td>";

            if($row['category']=="featured"){
                echo "<span class='badge bg-featured'>Featured</span>";
            } elseif($row['category']=="recent"){
                echo "<span class='badge bg-recent'>Recent</span>";
            } elseif($row['category']=="upcoming"){
                echo "<span class='badge bg-upcoming'>Upcoming</span>";
            } elseif($row['category']=="diarsipkan"){
                echo "<span class='badge bg-arsip'>Diarsipkan</span>";
            }

            echo "</td>
                  <td>".htmlspecialchars($row['title'])."</td>
                  <td>".$row['event_date']."</td>
                  <td>".htmlspecialchars(substr($row['description'], 0, 50))."...</td>
                  <td>".htmlspecialchars($row['location'])."</td>
                  <td>".($row['image'] ? "<img src='../uploads/".$row['image']."' width='80' style='border-radius:4px;'>" : "-")."</td>
                  <td>".($row['link'] ? "<a href='".$row['link']."' target='_blank' style='color:#3498db;'>🔗 Link</a>" : "-")."</td>
                  <td>".htmlspecialchars($row['tag'])."</td>
                  <td>
                    <a href='javascript:void(0)' onclick=\"openModal('edit', ".$row['id'].")\" style='color:#3498db; text-decoration:none; margin-right:10px;'>✏️ Edit</a>
                    <a href='admin.php?page=events&hapus=".$row['id']."' style='color:#e74c3c; text-decoration:none;' onclick=\"return confirm('Yakin hapus event ini?')\">🗑️ Hapus</a>
                  </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='10' align='center' style='padding:20px;'>Belum ada data event</td></tr>";
    }
    ?>
    </tbody>
  </table>
</div>

<!-- Modal Universal -->
<div id="eventModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3 id="modalTitle">➕ Tambah Event</h3>
      <span class="close" onclick="closeModal()">&times;</span>
    </div>
    <form method="post" enctype="multipart/form-data" id="eventForm">
      <input type="hidden" name="id" id="formId" value="">

      <label>Kategori</label>
      <select name="category" id="formCategory" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="featured">Featured</option>
        <option value="recent">Recent</option>
        <option value="upcoming">Upcoming</option>
        <option value="diarsipkan">Diarsipkan</option>
      </select>

      <label>Judul Event</label>
      <input type="text" name="title" id="formTitle" value="" required>

      <label>Tanggal</label>
      <input type="date" name="event_date" id="formEventDate" value="" required>

      <label>Deskripsi</label>
      <textarea name="description" id="formDescription" rows="4" required></textarea>

      <label>Lokasi</label>
      <input type="text" name="location" id="formLocation" value="">

      <label>Link</label>
      <input type="url" name="link" id="formLink" value="" placeholder="https://...">

      <label>Tag</label>
      <input type="text" name="tag" id="formTag" value="" placeholder="Pisahkan dengan koma">

      <label>Upload Gambar</label>
      <input type="file" name="image" accept="image/*">
      <div id="currentImage"></div>

      <button type="submit" name="simpan" class="btn-submit" id="submitButton">
        ✅ Simpan Event
      </button>
    </form>
  </div>
</div>

<script>
// Data event untuk edit
const eventsData = <?php echo json_encode($events_data); ?>;

// Buka modal
function openModal(action, id = null) {
    const modal = document.getElementById('eventModal');
    const form = document.getElementById('eventForm');
    
    if (action === 'tambah') {
        // Mode tambah - reset form
        document.getElementById('modalTitle').textContent = '➕ Tambah Event';
        document.getElementById('submitButton').textContent = '✅ Simpan Event';
        form.reset();
        document.getElementById('formId').value = '';
        document.getElementById('currentImage').innerHTML = '';
        
        // Reset select ke default
        document.getElementById('formCategory').selectedIndex = 0;
    } else if (action === 'edit' && id) {
        // Mode edit - isi form dengan data
        document.getElementById('modalTitle').textContent = '✏️ Edit Event';
        document.getElementById('submitButton').textContent = '💾 Update Event';
        
        if (eventsData[id]) {
            const event = eventsData[id];
            document.getElementById('formId').value = event.id;
            document.getElementById('formCategory').value = event.category;
            document.getElementById('formTitle').value = event.title;
            document.getElementById('formEventDate').value = event.event_date;
            document.getElementById('formDescription').value = event.description;
            document.getElementById('formLocation').value = event.location;
            document.getElementById('formLink').value = event.link;
            document.getElementById('formTag').value = event.tag;
            
            // Tampilkan gambar saat ini jika ada
            if (event.image) {
                document.getElementById('currentImage').innerHTML = `
                    <div style="margin:10px 0;">
                        <small>Gambar saat ini:</small><br>
                        <img src="../uploads/${event.image}" width="120" style="border-radius:4px; margin-top:5px;">
                    </div>
                `;
            } else {
                document.getElementById('currentImage').innerHTML = '';
            }
        }
    }
    
    modal.style.display = 'block';
}

// Tutup modal
function closeModal() {
    document.getElementById('eventModal').style.display = 'none';
}

// Cek jika ada parameter edit di URL (fallback untuk direct link)
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const editId = urlParams.get('edit');
    
    if (editId && eventsData[editId]) {
        openModal('edit', parseInt(editId));
        
        // Hapus parameter edit dari URL tanpa reload
        const newUrl = window.location.pathname + '?page=events';
        window.history.replaceState({}, document.title, newUrl);
    }
});

// Tutup modal jika klik di luar
window.onclick = function(event) {
    const modal = document.getElementById('eventModal');
    if (event.target === modal) {
        closeModal();
    }
}

// Tutup modal dengan ESC
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});

// Prevent form submit jika ingin validasi custom
document.getElementById('eventForm').addEventListener('submit', function(e) {
    // Biarkan form submit normal
    console.log('Form submitted');
});
</script>