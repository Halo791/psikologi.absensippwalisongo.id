<?php
include __DIR__ . '/../koneksi.php';

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
@keyframes fadeIn {
  from {opacity:0; transform:translateY(-20px);}
  to {opacity:1; transform:translateY(0);}
}
</style>

<div class="card">
  <h2>📄 Pengajuan Surat</h2>
  <button onclick="openModal()" style="padding:10px 15px; background:#2980b9; color:white; border:none; border-radius:6px; cursor:pointer;">+ Tambah Surat</button>
</div>

<div class="card">
  <h3>📋 Data Pengajuan Surat</h3>
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
    $no=1;
    $result = mysqli_query($conn, "SELECT * FROM pengajuan_surat ORDER BY id DESC");
    if(mysqli_num_rows($result) > 0){
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
        echo "<tr><td colspan='8' align='center'>Belum ada data</td></tr>";
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
}
// Auto-open modal saat edit
<?php if($edit): ?>
  openModal();
<?php endif; ?>
</script>
