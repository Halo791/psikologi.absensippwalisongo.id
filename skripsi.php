<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<div class="hero-section" style="background: linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);min-height:70vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:150px; padding-bottom:75px;">

  <div style="position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><defs><pattern id=\'grain\' width=\'100\' height=\'100\' patternUnits=\'userSpaceOnUse\'><circle cx=\'25\' cy=\'25\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/><circle cx=\'75\' cy=\'75\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/></pattern></defs><rect width=\'100\' height=\'100\' fill=\'url(%23grain)\'/></svg>');opacity:0.3;"></div>
  <div style="position:absolute;bottom:0;left:0;width:100%;height:100px;background:linear-gradient(to right,rgba(255,255,255,0.1),rgba(255,255,255,0.05));clip-path:polygon(0 70%,100% 100%,0 100%);"></div>

  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 pad">Pengajuan<br><span style="color:#F3E8FF;">Skripsi</span><br>Mahasiswa</h1>
        <p class="lead mb-4 text-white">
          Sistem ini digunakan untuk pengajuan judul, bimbingan, dan monitoring proses skripsi mahasiswa Fakultas Psikologi Universitas Merdeka Malang.
        </p>
        <a href="#layanan" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-semibold shadow ">AJUKAN SEKARANG</a>
      </div>
      <div class="col-lg-6 text-center">
        <div style="background:rgba(255,255,255,0.15);border-radius:20px;padding:20px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);">
          <img src="uploads/skripsi.png" alt="Skripsi Services" class="img-fluid rounded-3" style="max-width:400px;box-shadow:0 20px 40px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== SERVICES CARDS ===== -->
<div class="services-section py-5 bg-light" id="layanan">
  <div class="container text-center">
    <h2 class="fw-bold mb-3 text-dark">Fitur Skripsi</h2>
    <p class="text-muted mb-5">Beberapa layanan utama dalam sistem skripsi mahasiswa.</p>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3"><i class="bx bx-book fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i></div>
          <h4 class="fw-bold text-primary">Pengajuan Judul</h4>
          <p class="text-muted">Mahasiswa dapat mengajukan judul skripsi secara online.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3"><i class="bx bx-user-check fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i></div>
          <h4 class="fw-bold text-primary">Bimbingan Online</h4>
          <p class="text-muted">Dosen pembimbing dapat memberikan arahan dan revisi secara digital.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3"><i class="bx bx-check-square fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i></div>
          <h4 class="fw-bold text-primary">Monitoring</h4>
          <p class="text-muted">Proses skripsi bisa dimonitor hingga tahap sidang.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== PROFILE ===== -->
<div class="syarat-section py-5 text-white" 
     style="background:linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);">
  <div class="container">

    <div class="row mb-5">
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">📌 Syarat Skripsi</h2>
        <ul style="line-height:1.8; font-size:1rem;">
          <li>Berstatus mahasiswa aktif dengan KTM yang masih berlaku</li>
          <li>Telah menempuh minimal 130 SKS</li>
          <li>Telah mengikuti PKKMB (dibuktikan dengan sertifikat)</li>
          <li>Lulus mata kuliah prasyarat skripsi:
            <ul>
              <li>Pengantar Asesmen</li>
              <li>Statistik</li>
              <li>Metodologi Penelitian Kuantitatif</li>
              <li>Metode Penelitian Kualitatif</li>
              <li>Metode Penelitian Eksperimen</li>
              <li>Psikometri</li>
              <li>Penyusunan Skala Psikologi</li>
            </ul>
          </li>
          <li>Nilai D maksimal hanya 2 mata kuliah</li>
          <li>Tidak ada mata kuliah dengan nilai E</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">📖 Alur Skripsi</h2>
        <ol style="line-height:1.8; font-size:1rem;">
          <li>Mahasiswa melakukan pengajuan judul skripsi secara online</li>
          <li>Fakultas melakukan verifikasi persyaratan</li>
          <li>Penentuan dosen pembimbing oleh fakultas</li>
          <li>Proses bimbingan skripsi bersama dosen pembimbing</li>
          <li>Pengajuan ujian skripsi setelah bimbingan selesai</li>
          <li>Sidang skripsi dan penilaian akhir</li>
        </ol>
      </div>
    </div>

    <div class="row align-items-stretch mb-5">
      <div class="col-lg-12">
        <div class="p-4 bg-warning text-dark rounded-4 shadow-sm h-100">
          <h3 class="fw-bold mb-4 text-center">📝 Proses Pendaftaran Skripsi Baru</h3>
          <div class="row text-center">
            <div class="col-md-2"><p><b>Langkah 01</b><br>Cek kelengkapan syarat administrasi</p></div>
            <div class="col-md-2"><p><b>Langkah 02</b><br>Isi formulir pendaftaran skripsi</p></div>
            <div class="col-md-2"><p><b>Langkah 03</b><br>Upload berkas persyaratan</p></div>
            <div class="col-md-2"><p><b>Langkah 04</b><br>Proses verifikasi fakultas</p></div>
            <div class="col-md-2"><p><b>Langkah 05</b><br>Penentuan dosen pembimbing</p></div>
            <div class="col-md-2"><p><b>Langkah 06</b><br>Pengajuan Judul Skripsi</p></div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">📑 Syarat Pendaftaran Skripsi</h2>
        <h5 class="fw-semibold">Untuk Pendaftar Baru</h5>
        <ul>
          <li>KTM & KRS semester berjalan</li>
          <li>Transkrip nilai minimal 130 SKS</li>
          <li>Bukti sertifikat PKKMB</li>
          <li>Bukti pembayaran administrasi skripsi</li>
        </ul>
        <h5 class="fw-semibold mt-3">Untuk Pendaftar Perpanjangan</h5>
        <ul>
          <li>KTM & KRS semester berjalan</li>
          <li>Bukti konsultasi skripsi sebelumnya</li>
          <li>Bukti pembayaran perpanjangan</li>
        </ul>
      </div>

      <div class="col-lg-6 text-center d-flex align-items-center justify-content-center">
        <a href="#formSkripsi" class="btn btn-light btn-lg rounded-pill fw-semibold shadow">
          📤 Ajukan Pendaftaran Skripsi
        </a>
      </div>
    </div>

  </div>
</div>


<div class="vision-mission-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Tujuan Sistem</h2>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h3 class="text-primary fw-bold mb-3">Visi</h3>
          <p>Menjadi sistem yang memudahkan pengelolaan skripsi dengan transparansi, efisiensi, dan akurasi data.</p>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h3 class="text-primary fw-bold mb-3">Misi</h3>
          <ul class="text-muted ps-3">
            <li>Mempermudah mahasiswa dalam mengajukan dan memantau proses skripsi.</li>
            <li>Meningkatkan komunikasi antara mahasiswa dan dosen pembimbing.</li>
            <li>Menyediakan sistem monitoring skripsi yang terintegrasi.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="methods-section py-4 text-white" style="background:linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="bg-white bg-opacity-10 p-5 rounded-circle d-inline-block">
          <i class="bx bx-clipboard-data fs-1 text-white"></i>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-4">Metode Pengelolaan</h2>
        <p class="text-white">Proses pengajuan dan bimbingan skripsi menggunakan sistem digital terintegrasi.</p>
        <ul>
          <li>Pengajuan Judul Online</li>
          <li>Bimbingan via Sistem</li>
          <li>Tracking Progress Skripsi</li>
          <li>Persiapan Sidang Akhir</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ===== CONTACT ===== -->
<div class="contact-section py-5" style="background:#1e293b;" id="contact">
  <div class="container text-center text-white">
    <h2 class="fw-bold mb-4">Kontak Admin Skripsi</h2>
    <p class="text-white-50 mb-5">Hubungi admin untuk informasi lebih lanjut mengenai pengajuan skripsi.</p>
    <div class="row justify-content-center mb-4">
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-phone fs-2 mb-2"></i>
          <h5>Telepon</h5>
          <p>(0341) 567-432 ext. 150</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-envelope fs-2 mb-2"></i>
          <h5>Email</h5>
          <p>skripsi@unmer.ac.id</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-map fs-2 mb-2"></i>
          <h5>Alamat</h5>
          <p>Gedung Fakultas Psikologi<br>Univ. Merdeka Malang</p>
        </div>
      </div>
    </div>
    <div>
      <a href="tel:0341567432" class="btn btn-outline-light rounded-pill me-3"><i class="bx bx-phone me-1"></i>Hubungi Admin</a>
      <a href="mailto:skripsi@unmer.ac.id" class="btn btn-light rounded-pill text-primary fw-semibold"><i class="bx bx-envelope me-1"></i>Kirim Email</a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
