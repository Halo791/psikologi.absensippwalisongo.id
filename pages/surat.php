<?php
include __DIR__ . '/../koneksi.php';

// --- Filter parameter ---
$filter_status = isset($_GET['filter_status']) ? mysqli_real_escape_string($conn, $_GET['filter_status']) : '';
$filter_nama = isset($_GET['filter_nama']) ? mysqli_real_escape_string($conn, $_GET['filter_nama']) : '';
$filter_nim = isset($_GET['filter_nim']) ? mysqli_real_escape_string($conn, $_GET['filter_nim']) : '';

// --- Tambah / Update data ---
if(isset($_POST['simpan'])){
    $id     = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $nim    = mysqli_real_escape_string($conn, $_POST['nim']);
    $nama   = mysqli_real_escape_string($conn, $_POST['nama']);
    $prodi  = mysqli_real_escape_string($conn, $_POST['prodi']);
    $jenis  = mysqli_real_escape_string($conn, $_POST['jenis_surat']);
    $ket    = mysqli_real_escape_string($conn, $_POST['keterangan']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    if($id > 0){
        $sql = "UPDATE pengajuan_surat 
                SET nim='$nim', nama='$nama', prodi='$prodi', jenis_surat='$jenis',
                    keterangan='$ket', status='$status'
                WHERE id=$id";
    } else {
        $sql = "INSERT INTO pengajuan_surat (nim, nama, prodi, jenis_surat, keterangan, status) 
                VALUES ('$nim','$nama','$prodi','$jenis','$ket','$status')";
    }

    if(!mysqli_query($conn, $sql)){
        die("Query gagal: " . mysqli_error($conn));
    }
    header("Location: admin.php?page=surat");
    exit;
}

// --- Hapus data ---
if(isset($_GET['hapus'])){
    $id = intval($_GET['hapus']);
    mysqli_query($conn, "DELETE FROM pengajuan_surat WHERE id=$id");
    header("Location: admin.php?page=surat");
    exit;
}

// --- Reset filter ---
if(isset($_GET['reset'])){
    header("Location: admin.php?page=surat");
    exit;
}

// --- Ambil data edit (untuk modal) ---
$edit = null;
if(isset($_GET['edit'])){
    $id = intval($_GET['edit']);
    $res = mysqli_query($conn, "SELECT * FROM pengajuan_surat WHERE id=$id LIMIT 1");
    $edit = mysqli_fetch_assoc($res);
}
?>

<style>
/* Tabel modern */
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
.table-modern tr:hover {
  background:#f9f9f9;
}

/* Badge status */
.badge {
  padding:5px 10px;
  border-radius:12px;
  font-size:12px;
  font-weight:bold;
}
.bg-warning { background:#f1c40f; color:#fff; }
.bg-success { background:#27ae60; color:#fff; }
.bg-danger  { background:#e74c3c; color:#fff; }

/* Modal overlay */
.modal {
  display:none; 
  position:fixed; 
  z-index:1000; 
  left:0; top:0; 
  width:100%; height:100%; 
  background:rgba(0,0,0,0.6); 
  overflow:auto;
}
.modal-content {
  background:#fff; 
  margin:5% auto; 
  padding:20px 25px; 
  border-radius:10px; 
  width:500px; 
  max-width:95%; 
  box-shadow:0 5px 15px rgba(0,0,0,0.3);
  animation: fadeIn 0.3s ease;
}
.modal-header {
  display:flex; 
  justify-content:space-between; 
  align-items:center; 
  border-bottom:1px solid #eee; 
  margin-bottom:15px;
}
.modal-header h3 { margin:0; font-size:18px; font-weight:600; }
.close {
  cursor:pointer; font-size:22px; font-weight:bold; color:#555;
}
.close:hover { color:#000; }
.modal-content input,
.modal-content select,
.modal-content textarea {
  width:100%; 
  padding:10px 12px; 
  margin-bottom:15px; 
  border:1px solid #ddd; 
  border-radius:6px; 
  font-size:14px;
}
.modal-content input:focus,
.modal-content select:focus,
.modal-content textarea:focus {
  border-color:#2980b9;
  outline:none;
  box-shadow:0 0 4px rgba(41,128,185,0.4);
}
.btn-submit {
  background:#27ae60; 
  color:#fff; 
  border:none; 
  padding:10px; 
  width:100%; 
  border-radius:6px; 
  font-size:15px;
  cursor:pointer;
}
.btn-submit:hover { background:#219150; }

/* Filter styles */
.filter-container {
  background:#f8f9fa;
  padding:15px;
  border-radius:8px;
  margin-bottom:20px;
  box-shadow:0 2px 4px rgba(0,0,0,0.1);
}
.filter-row {
  display:flex;
  flex-wrap:wrap;
  gap:15px;
  margin-bottom:10px;
}
.filter-group {
  flex:1;
  min-width:200px;
}
.filter-group label {
  display:block;
  margin-bottom:5px;
  font-weight:600;
  color:#2c3e50;
}
.filter-group input,
.filter-group select {
  width:100%;
  padding:8px 12px;
  border:1px solid #ddd;
  border-radius:6px;
  font-size:14px;
}
.filter-group input:focus,
.filter-group select:focus {
  border-color:#2980b9;
  outline:none;
  box-shadow:0 0 4px rgba(41,128,185,0.4);
}
.filter-buttons {
  display:flex;
  gap:10px;
  margin-top:10px;
}
.btn-filter {
  padding:8px 15px;
  border:none;
  border-radius:6px;
  cursor:pointer;
  font-size:14px;
  font-weight:600;
  transition:background 0.3s;
}
.btn-primary {
  background:#2980b9;
  color:white;
}
.btn-primary:hover {
  background:#1a6ca1;
}
.btn-secondary {
  background:#7f8c8d;
  color:white;
}
.btn-secondary:hover {
  background:#6c7b7d;
}

@keyframes fadeIn {
  from {opacity:0; transform:translateY(-20px);}
  to {opacity:1; transform:translateY(0);}
}
</style>

<div class="card">
  <h2>📄 Pengajuan Surat</h2>
  <button onclick="openModal()" style="padding:10px 15px; background:#2980b9; color:white; border:none; border-radius:6px; cursor:pointer; margin-bottom:15px;">+ Tambah Surat</button>
</div>

<!-- Filter Section -->
<div class="card">
  <h3>🔍 Filter Data</h3>
  <div class="filter-container">
    <form method="get" action="">
      <input type="hidden" name="page" value="surat">
      
      <div class="filter-row">
        <div class="filter-group">
          <label>Status Pengajuan</label>
          <select name="filter_status">
            <option value="">-- Semua Status --</option>
            <option value="Diproses" <?= $filter_status == 'Diproses' ? 'selected' : '' ?>>Diproses</option>
            <option value="Selesai" <?= $filter_status == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
            <option value="Ditolak" <?= $filter_status == 'Ditolak' ? 'selected' : '' ?>>Ditolak</option>
          </select>
        </div>
        
        <div class="filter-group">
          <label>Nama Mahasiswa</label>
          <input type="text" name="filter_nama" value="<?= htmlspecialchars($filter_nama) ?>" placeholder="Cari nama...">
        </div>
        
        <div class="filter-group">
          <label>NIM Mahasiswa</label>
          <input type="text" name="filter_nim" value="<?= htmlspecialchars($filter_nim) ?>" placeholder="Cari NIM...">
        </div>
      </div>
      
      <div class="filter-buttons">
        <button type="submit" class="btn-filter btn-primary">🔍 Terapkan Filter</button>
        <a href="admin.php?page=surat&reset=1" class="btn-filter btn-secondary">🔄 Reset Filter</a>
      </div>
    </form>
  </div>
</div>

<div class="card">
  <h3>📋 Data Pengajuan Surat</h3>
  
  <?php
  // Build query dengan filter
  $sql = "SELECT * FROM pengajuan_surat WHERE 1=1";
  
  if (!empty($filter_status)) {
    $sql .= " AND status = '$filter_status'";
  }
  
  if (!empty($filter_nama)) {
    $sql .= " AND nama LIKE '%$filter_nama%'";
  }
  
  if (!empty($filter_nim)) {
    $sql .= " AND nim LIKE '%$filter_nim%'";
  }
  
  $sql .= " ORDER BY id DESC";
  
  $result = mysqli_query($conn, $sql);
  $total_data = mysqli_num_rows($result);
  ?>
  
  <p style="margin-bottom: 15px; color: #666;">
    Menampilkan <strong><?= $total_data ?></strong> data
    <?php if (!empty($filter_status) || !empty($filter_nama) || !empty($filter_nim)): ?>
      (difilter)
    <?php endif; ?>
  </p>
  
  <table class="table-modern">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Prodi</th>
      <th>Jenis Surat</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    <?php
    if($total_data > 0){
        $no=1;
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                  <td>".$no++."</td>
                  <td>".$row['nim']."</td>
                  <td>".$row['nama']."</td>
                  <td>".$row['prodi']."</td>
                  <td>".$row['jenis_surat']."</td>
                  <td>";
            if ($row['status'] == 'Diproses') {
                echo "<span class='badge bg-warning'>Diproses</span>";
            } elseif ($row['status'] == 'Selesai') {
                echo "<span class='badge bg-success'>Selesai</span>";
            } else {
                echo "<span class='badge bg-danger'>Ditolak</span>";
            }
            echo "</td>
                  <td>
                    <a href='admin.php?page=surat&edit=".$row['id']."'>✏️</a> | 
                    <a href='admin.php?page=surat&hapus=".$row['id']."' onclick=\"return confirm('Yakin hapus data ini?')\">🗑️</a>";
            if ($row['status'] == 'Selesai') {
                echo " | <a href='generate_surat.php?id=".$row['id']."' target='_blank'>⬇️</a>";
            }
            echo "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='8' align='center'>";
        if (!empty($filter_status) || !empty($filter_nama) || !empty($filter_nim)) {
            echo "Tidak ada data yang sesuai dengan filter";
        } else {
            echo "Belum ada data";
        }
        echo "</td></tr>";
    }
    ?>
  </table>
</div>

<!-- Modal -->
<div id="suratModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3><?= $edit ? "✏️ Edit Surat" : "➕ Tambah Surat" ?></h3>
      <span class="close" onclick="closeModal()">&times;</span>
    </div>
    <form method="post">
      <input type="hidden" name="id" value="<?= $edit['id'] ?? '' ?>">
      <label>NIM</label>
      <input type="text" name="nim" value="<?= $edit['nim'] ?? '' ?>" required>
      
      <label>Nama</label>
      <input type="text" name="nama" value="<?= $edit['nama'] ?? '' ?>" required>
      
      <label>Program Studi</label>
      <input type="text" name="prodi" value="<?= $edit['prodi'] ?? '' ?>" required>
      
      <label>Jenis Surat</label>
      <select name="jenis_surat" required>
        <option value="">-- Pilih Jenis Surat --</option>
        <option value="Surat Aktif Kuliah" <?= ($edit['jenis_surat'] ?? '')=="Surat Aktif Kuliah"?"selected":""; ?>>Surat Aktif Kuliah</option>
        <option value="Surat Cuti" <?= ($edit['jenis_surat'] ?? '')=="Surat Cuti"?"selected":""; ?>>Surat Cuti</option>
        <option value="Surat Keterangan Lulus" <?= ($edit['jenis_surat'] ?? '')=="Surat Keterangan Lulus"?"selected":""; ?>>Surat Keterangan Lulus</option>
      </select>
      
      <label>Keterangan</label>
      <textarea name="keterangan"><?= $edit['keterangan'] ?? '' ?></textarea>
      
      <label>Status</label>
      <select name="status" required>
        <option value="Diproses" <?= ($edit['status'] ?? '')=="Diproses"?"selected":""; ?>>Diproses</option>
        <option value="Selesai" <?= ($edit['status'] ?? '')=="Selesai"?"selected":""; ?>>Selesai</option>
        <option value="Ditolak" <?= ($edit['status'] ?? '')=="Ditolak"?"selected":""; ?>>Ditolak</option>
      </select>
      
      <button type="submit" name="simpan" class="btn-submit">
        <?= $edit ? "Update Surat" : "Simpan Surat" ?>
      </button>
    </form>
  </div>
</div>

<script>
function openModal(){
  document.getElementById("suratModal").style.display="block";
}
function closeModal(){
  document.getElementById("suratModal").style.display="none";
  // Redirect tanpa parameter edit
  window.location.href = "admin.php?page=surat";
}
// Auto-open modal saat edit
<?php if($edit): ?>
  openModal();
<?php endif; ?>
</script>