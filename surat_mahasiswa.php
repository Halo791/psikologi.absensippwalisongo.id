<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

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
                        </ul>
                    </div>
                    <div class="default-btn mt-3">
                        <a href="contact-us.html">Hubungi Bu Usla</a>
                    </div>
                </div>
            </div>

            <!-- Konten Persuratan -->
            <div class="col-lg-8">
                <div class="p-4" style="background:#e9f7ef; border-radius:10px;">
                    <h3 class="text-center mb-4">Form Pengajuan Surat</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" placeholder="Masukkan NIM">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Program Studi</label>
                            <input type="text" class="form-control" placeholder="Masukkan Prodi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Surat</label>
                            <select class="form-select">
                                <option selected>Pilih Jenis Surat</option>
                                <option>Surat Aktif Kuliah</option>
                                <option>Surat Izin Riset</option>
                                <option>Surat Rekomendasi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" rows="3" placeholder="Tuliskan keterangan tambahan"></textarea>
                        </div>
                        <button type="submit" class="default-btn">Ajukan Surat</button>
                    </form>
                </div>

                <!-- Riwayat Pengajuan Dummy -->
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
                            <tr>
                                <td>2141720001</td>
                                <td>Budi Santoso</td>
                                <td>Surat Aktif Kuliah</td>
                                <td><span class="badge bg-warning">Diproses</span></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2141720002</td>
                                <td>Siti Aminah</td>
                                <td>Surat Izin Riset</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td><a href="#">Download</a></td>
                            </tr>
                            <tr>
                                <td>2141720003</td>
                                <td>Agus Wijaya</td>
                                <td>Surat Rekomendasi</td>
                                <td><span class="badge bg-danger">Ditolak</span></td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="go-top active">
    <i class="bx bx-up-arrow-alt"></i>
</div>

<?php include 'templates/footer.php'; ?>
