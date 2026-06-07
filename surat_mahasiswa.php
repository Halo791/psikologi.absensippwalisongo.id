<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
// Proses submit form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim         = mysqli_real_escape_string($conn, $_POST['nim']);
    $nama        = mysqli_real_escape_string($conn, $_POST['nama']);
    $prodi       = mysqli_real_escape_string($conn, $_POST['prodi']);
    $jenis_surat = mysqli_real_escape_string($conn, $_POST['jenis_surat']);
    $keterangan  = mysqli_real_escape_string($conn, $_POST['keterangan']);

    $query = "INSERT INTO pengajuan_surat (nim, nama, prodi, jenis_surat, keterangan) 
              VALUES ('$nim', '$nama', '$prodi', '$jenis_surat', '$keterangan')";
    mysqli_query($conn, $query);
}
?>

<div class="section-banner bg-16">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Persuratan Mahasiswa</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Layanan persuratan untuk mahasiswa. Silakan ajukan surat sesuai kebutuhan Anda.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="academics-section ptb-100">
    <div class="container">
        <div class="row">

            <!-- Sidebar Kategori -->
            <div class="col-lg-4 mb-4">
                <div class="academics-left">
                    <div class="ac-category">
                        <ul>
                            <li><a href="program_studi.php">Program Akademik</a></li>
                            <li><a href="kemahasiswaan.php">Kemahasiswaan</a></li>
                            <li><a href="jadwal_kuliah.php">Jadwal Kuliah</a></li>
                            <li><a class="active" href="surat_mahasiswa.php">Persuratan Mahasiswa</a></li>
                            <li><a href="dosen.php">Dosen Kami</a></li>
                        </ul>
                    </div>
                    <div class="default-btn mt-3">
                        <a href="contact-us.html">Hubungi Bu Usla</a>
                    </div>
                </div>
            </div>

            <!-- Konten Persuratan -->
            <div class="col-lg-8">
                <div class="p-4" style="background:#bf2ec9; border-radius:10px;">
                    <h3 class="text-center mb-4">Form Pengajuan Surat</h3>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label fw-bold">NIM</label>
                            <input type="text" name="nim" class="form-control" 
                                style="border:2px solid #000; font-weight:bold;" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" name="nama" class="form-control" 
                                style="border:2px solid #000; font-weight:bold;" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Program Studi</label>
                            <input type="text" name="prodi" class="form-control" 
                                style="border:2px solid #000; font-weight:bold;" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Surat</label>
                            <select name="jenis_surat" class="form-select" 
                                    style="border:2px solid #000; font-weight:bold;" required>
                                <option value="">Pilih Jenis Surat</option>
                                <option value="Surat Aktif Kuliah">Surat Aktif Kuliah</option>
                                <option value="Surat Izin Riset">Surat Izin Riset</option>
                                <option value="Surat Rekomendasi">Surat Rekomendasi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keterangan</label>
                            <textarea name="keterangan" class="form-control" rows="3" 
                                    style="border:2px solid #000; font-weight:bold;"></textarea>
                        </div>
                        <button type="submit" class="default-btn">Ajukan Surat</button>
                    </form>
                </div>

                <!-- Riwayat Pengajuan
                <div class="p-4 mt-4" style="background:#fef9e7; border-radius:10px;">
                    <h4 class="mb-3 text-center">Riwayat Pengajuan Surat</h4>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Surat</th>
                                <th>Status</th>
                                <th>File Surat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM pengajuan_surat ORDER BY created_at DESC");
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$row['nim']."</td>";
                                echo "<td>".$row['nama']."</td>";
                                echo "<td>".$row['jenis_surat']."</td>";
                                echo "<td>";
                                if ($row['status'] == 'Diproses') {
                                    echo '<span class="badge bg-warning">Diproses</span>';
                                } elseif ($row['status'] == 'Selesai') {
                                    echo '<span class="badge bg-success">Selesai</span>';
                                } else {
                                    echo '<span class="badge bg-danger">Ditolak</span>';
                                }
                                echo "</td>";
                                echo "<td>";
                                if ($row['file_surat']) {
                                    echo '<a href="uploads/'.$row['file_surat'].'" target="_blank">Download</a>';
                                } else {
                                    echo "-";
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div> -->
            </div>

        </div>
    </div>
</div>

<div class="go-top active">
    <i class="bx bx-up-arrow-alt"></i>
</div>

<?php include 'templates/footer.php'; ?>
