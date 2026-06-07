<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<div class="hero-section" style="background: linear-gradient(135deg,#2563EB 0%,#3B82F6 50%,#60A5FA 100%);min-height:70vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:150px; padding-bottom:75px;">

  <div style="position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><defs><pattern id=\'grain\' width=\'100\' height=\'100\' patternUnits=\'userSpaceOnUse\'><circle cx=\'25\' cy=\'25\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/><circle cx=\'75\' cy=\'75\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/></pattern></defs><rect width=\'100\' height=\'100\' fill=\'url(%23grain)\'/></svg>');opacity:0.3;"></div>
  <div style="position:absolute;bottom:0;left:0;width:100%;height:100px;background:linear-gradient(to right,rgba(255,255,255,0.1),rgba(255,255,255,0.05));clip-path:polygon(0 70%,100% 100%,0 100%);"></div>

  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 pad">Program<br><span style="color:#E0F2FE;">MBKM</span><br>Fakultas Psikologi</h1>
        <p class="lead mb-4 text-white">
          MBKM (Merdeka Belajar Kampus Merdeka) adalah kebijakan Kemendikbudristek yang memberi mahasiswa hak belajar 3 semester di luar prodi dan 2 semester di luar kampus, untuk membekali mereka dengan pengalaman nyata dunia kerja melalui magang, studi independen, pertukaran mahasiswa, hingga proyek kemanusiaan.
        </p>
        <a href="#layanan" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-semibold shadow">IKUTI PROGRAM</a>
      </div>
      <div class="col-lg-6 text-center">
        <div style="background:rgba(255,255,255,0.15);border-radius:20px;padding:20px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);">
          <img src="uploads/mbkm.png" alt="MBKM Services" class="img-fluid rounded-3" style="max-width:400px;box-shadow:0 20px 40px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== TUJUAN MBKM ===== -->
<div class="vision-mission-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Tujuan MBKM</h2>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="text-primary fw-bold">Menghasilkan Lulusan Berkualitas</h4>
          <p>Menghasilkan lulusan dengan kemampuan relevan dengan dunia kerja dan Industri 4.0.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="text-primary fw-bold">Pengembangan Hard Skill & Soft Skill</h4>
          <p>Membekali mahasiswa dengan keterampilan teknis dan non-teknis untuk kesiapan karir.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="text-primary fw-bold">Pengalaman Dunia Kerja</h4>
          <p>Memberikan pengalaman langsung melalui magang di perusahaan atau institusi.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="text-primary fw-bold">Wawasan & Jejaring</h4>
          <p>Memperluas wawasan serta membangun jaringan profesional untuk masa depan.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== JENIS PROGRAM MBKM ===== -->
<div class="services-section py-5 text-white" style="background:linear-gradient(135deg,#2563EB 0%,#3B82F6 50%,#60A5FA 100%);" id="layanan">
  <div class="container text-center">
    <h2 class="fw-bold mb-3 text-white">Jenis Kegiatan MBKM</h2>
    <p class="text-white-50 mb-5">Berbagai program yang dapat diikuti mahasiswa dalam MBKM.</p>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h4 class="fw-bold">Magang Bersertifikat</h4>
          <p>Pengalaman kerja nyata di perusahaan/organisasi selama 1–2 semester.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h4 class="fw-bold">Studi Independen</h4>
          <p>Belajar hal baru di luar program studi dengan supervisi dosen.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h4 class="fw-bold">Kampus Mengajar</h4>
          <p>Mahasiswa ditugaskan untuk mengajar di sekolah atau satuan pendidikan.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h4 class="fw-bold">Pertukaran Mahasiswa</h4>
          <p>Belajar di perguruan tinggi lain untuk memperkuat wawasan kebangsaan.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h4 class="fw-bold">Membangun Desa (KKN Tematik)</h4>
          <p>Kontribusi mahasiswa dalam pembangunan desa melalui kegiatan KKN.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h4 class="fw-bold">Riset & Proyek Kemanusiaan</h4>
          <p>Penelitian, proyek sosial, maupun bela negara sesuai bidang dan minat.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== MANFAAT MBKM ===== -->
<div class="profile-section py-5 text-white" style="background:linear-gradient(135deg,#1E40AF 0%,#2563EB 50%,#3B82F6 100%);">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Manfaat MBKM bagi Mahasiswa</h2>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="p-4 bg-white bg-opacity-10 rounded-4 h-100">
          <h5 class="fw-bold">Peningkatan Kemampuan Profesional</h5>
          <p>Mahasiswa memperoleh pengalaman kerja nyata dan keterampilan sesuai kebutuhan industri.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white bg-opacity-10 rounded-4 h-100">
          <h5 class="fw-bold">Jejaring yang Luas</h5>
          <p>Kesempatan berinteraksi dengan profesional dan institusi di berbagai bidang.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white bg-opacity-10 rounded-4 h-100">
          <h5 class="fw-bold">Pemahaman Dunia Kerja</h5>
          <p>Mahasiswa lebih siap menghadapi dunia kerja dengan pengalaman langsung.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white bg-opacity-10 rounded-4 h-100">
          <h5 class="fw-bold">Kesempatan Karir</h5>
          <p>Pengalaman MBKM meningkatkan peluang mahasiswa untuk diterima kerja setelah lulus.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== CONTACT ===== -->
<div class="contact-section py-5" style="background:#1e293b;" id="contact">
  <div class="container text-center text-white">
    <h2 class="fw-bold mb-4">Kontak Admin MBKM</h2>
    <p class="text-white-50 mb-5">Hubungi admin untuk informasi lebih lanjut mengenai pendaftaran MBKM.</p>
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
          <p>mbkm@unmer.ac.id</p>
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
      <a href="mailto:mbkm@unmer.ac.id" class="btn btn-light rounded-pill text-primary fw-semibold"><i class="bx bx-envelope me-1"></i>Kirim Email</a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
