<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<!-- ===== HERO SECTION ===== -->
<div class="hero-section" style="background: linear-gradient(135deg,#0ea5e9 0%,#10b981 50%,#34d399 100%);min-height:70vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:150px; padding-bottom:75px;">

  <div style="position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><defs><pattern id=\'grain\' width=\'100\' height=\'100\' patternUnits=\'userSpaceOnUse\'><circle cx=\'25\' cy=\'25\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/><circle cx=\'75\' cy=\'75\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/></pattern></defs><rect width=\'100\' height=\'100\' fill=\'url(%23grain)\'/></svg>');opacity:0.3;"></div>

  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 pad">Kuliah<br><span style="color:#e0f2fe;">Kerja Nyata</span><br>(KKN)</h1>
        <p class="lead mb-4 text-white">
          KKN UNMER Malang adalah program pengabdian masyarakat bagi mahasiswa untuk menerapkan ilmu dan keterampilan secara langsung di lapangan, dengan fokus pada pertanian urban, eco-batik, dan energi terbarukan.
        </p>
        <a href="#program" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-semibold shadow">IKUTI KKN</a>
      </div>
      <div class="col-lg-6 text-center">
        <div style="background:rgba(255,255,255,0.15);border-radius:20px;padding:20px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);">
          <img src="uploads/kkn.png" alt="KKN UNMER" class="img-fluid rounded-3" style="max-width:400px;box-shadow:0 20px 40px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== APA ITU KKN ===== -->
<div class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Apa itu KKN UNMER Malang?</h2>
    <p class="text-center mb-5 text-muted" style="max-width: 850px; margin: auto;">
      KKN adalah bentuk kegiatan <b>pengabdian kepada masyarakat</b> yang melibatkan mahasiswa untuk membantu dan memberikan solusi nyata bagi permasalahan masyarakat. Program ini bersifat <b>interdisipliner</b> dan <b>berbasis solusi</b>, dengan kontribusi langsung dari berbagai disiplin ilmu.
    </p>
    <div class="row g-4 text-center">
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="bx bx-group fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Pengabdian Masyarakat</h5>
          <p>Mahasiswa hadir untuk membantu dan memberi solusi pada masalah masyarakat.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="bx bx-layer fs-1 text-success mb-3"></i>
          <h5 class="fw-bold">Interdisipliner</h5>
          <p>Melibatkan mahasiswa dari berbagai program studi untuk program lintas keilmuan.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <i class="bx bx-bulb fs-1 text-warning mb-3"></i>
          <h5 class="fw-bold">Berbasis Solusi</h5>
          <p>Merancang dan melaksanakan program yang berdampak nyata.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== CONTOH PROGRAM ===== -->
<div class="services-section py-5 text-white" style="background:linear-gradient(135deg,#0ea5e9 0%,#10b981 50%,#34d399 100%);" id="program">
  <div class="container text-center">
    <h2 class="fw-bold mb-3 text-white">Contoh Program KKN</h2>
    <p class="text-white-50 mb-5">Beberapa contoh program KKN UNMER Malang yang berdampak nyata bagi masyarakat.</p>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h5 class="fw-bold">🌱 Smart Urban Farming</h5>
          <p>Pertanian hidroponik di lahan sempit untuk gaya hidup sehat masyarakat.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h5 class="fw-bold">🖌 Eco-Batik Community</h5>
          <p>Pelatihan eco-batik untuk meningkatkan keterampilan dan ekonomi warga.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
          <h5 class="fw-bold">🔆 Energi Hijau</h5>
          <p>Instalasi mini PLTS untuk mendukung wisata berkelanjutan dan energi mandiri.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== PELAKSANAAN ===== -->
<div class="process-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Bagaimana Pelaksanaannya?</h2>
    <div class="row text-center justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-primary">01</h4>
          <p><b>Pembukaan & Pembekalan</b><br>Pembekalan awal mahasiswa oleh universitas sebelum KKN berlangsung.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-success">02</h4>
          <p><b>Pelaksanaan di Lapangan</b><br>Mahasiswa ditugaskan di lokasi tertentu untuk program pengabdian.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-warning">03</h4>
          <p><b>Dampak Nyata</b><br>Memberikan hasil yang positif dan berkelanjutan bagi masyarakat.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== CONTACT ===== -->
<div class="contact-section py-5" style="background:#0f172a;" id="contact">
  <div class="container text-center text-white">
    <h2 class="fw-bold mb-4">Kontak Admin KKN</h2>
    <p class="text-white-50 mb-5">Hubungi admin untuk informasi lebih lanjut mengenai KKN UNMER Malang.</p>
    <div class="row justify-content-center mb-4">
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-phone fs-2 mb-2"></i>
          <h5>Telepon</h5>
          <p>(0341) 567-123 ext. 210</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-envelope fs-2 mb-2"></i>
          <h5>Email</h5>
          <p>kkn@unmer.ac.id</p>
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
      <a href="tel:0341567123" class="btn btn-outline-light rounded-pill me-3"><i class="bx bx-phone me-1"></i>Hubungi Admin</a>
      <a href="mailto:kkn@unmer.ac.id" class="btn btn-light rounded-pill text-primary fw-semibold"><i class="bx bx-envelope me-1"></i>Kirim Email</a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
