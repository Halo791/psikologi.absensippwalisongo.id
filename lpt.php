<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>


<div class="hero-section" style="background: linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);min-height:70vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:100px; padding-bottom:75px;">
">
  <div style="position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><defs><pattern id=\'grain\' width=\'100\' height=\'100\' patternUnits=\'userSpaceOnUse\'><circle cx=\'25\' cy=\'25\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/><circle cx=\'75\' cy=\'75\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/></pattern></defs><rect width=\'100\' height=\'100\' fill=\'url(%23grain)\'/></svg>');opacity:0.3;"></div>
  <div style="position:absolute;bottom:0;left:0;width:100%;height:100px;background:linear-gradient(to right,rgba(255,255,255,0.1),rgba(255,255,255,0.05));clip-path:polygon(0 70%,100% 100%,0 100%);"></div>

  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 pad">Lembaga<br><span style="color:#F3E8FF;">Psikologi</span><br>Terapan</h1>
        <p class="lead mb-4 text-white">Memberikan layanan jasa dan praktik psikologi di bidang Pendidikan-Perkembangan, Klinis, maupun Industri/Organisasi.</p>
        <a href="#layanan" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-semibold shadow ">JELAJAHI KAMI</a>
      </div>
      <div class="col-lg-6 text-center">
        <div style="background:rgba(255,255,255,0.15);border-radius:20px;padding:20px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);">
          <img src="uploads/LPT.png" alt="LPT Services" class="img-fluid rounded-3" style="max-width:400px;box-shadow:0 20px 40px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== SERVICES CARDS ===== -->
<div class="services-section py-5 bg-light" id="layanan">
  <div class="container text-center">
    <h2 class="fw-bold mb-3 text-dark">Layanan Kami</h2>
    <p class="text-muted mb-5">Komitmen dan Tujuan kami sangat jelas disini. Lihatilah yang kami punya.</p>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3"><i class="bx bx-heart fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i></div>
          <h4 class="fw-bold text-primary">Layanan</h4>
          <p class="text-muted">Komitmen dan Tujuan kami sangat jelas disini. Lihatilah yang kami punya.</p>
          <a href="#layanan-detail" class="btn btn-outline-primary rounded-pill">LIHAT?</a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3"><i class="bx bx-user-check fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i></div>
          <h4 class="fw-bold text-primary">Psikolog</h4>
          <p class="text-muted">Pengukuran <em>assessment</em> dilakukan oleh para Psikolog profesional.</p>
          <a href="#psikolog-detail" class="btn btn-outline-primary rounded-pill">LIHAT?</a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3"><i class="bx bx-buildings fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i></div>
          <h4 class="fw-bold text-primary">Mitra</h4>
          <p class="text-muted">Banyak mitra kerjasama yang kami rangkul. Anda salah satunya.</p>
          <a href="#mitra-detail" class="btn btn-outline-primary rounded-pill">LIHAT?</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== PROFILE ===== -->
<div class="profile-section py-5 text-white" 
     style="background:linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);">
  <div class="container" style="max-width: 900px;"> 
    <h2 class="fw-bold text-center mb-4">Profil Kami</h2>
    <p class="lead text-center mb-5 text-white" 
       style="line-height:1.8; font-size:1.1rem;">
Lembaga Psikologi Terapan (LPT) merupakan sebuah  lembaga  di bawah  naungan Fakultas Psikologi Universitas Merdeka Malang yang memberikan layanan jasa dan praktik psikologi di bidang Pendidikan-Perkembangan, Klinis, maupun Industri/Organisasi. Lembaga ini didirikan pada tahun 2008 di Malang oleh para Psikolog dan Struktural Fakultas Psikologi Universitas Merdeka Malang.    </p>

    <h3 class="text-center fw-bold mb-3 text-white">Komitmen Kami</h3> 
    <p class="text-center text-white" style="line-height:1.8; font-size:1.05rem; max-width:800px; margin:auto;">
Kami memiliki komitmen bahwa dalam setiap penyelenggaraan layanan jasa dan praktik psikologi, kami akan senantiasa meningkatkan pengetahuan mengenai psikologi manusia. Melalui peningkatan pengetahuan tersebut, kami bertekad untuk terus meningkatkan kemampuan  profesional  kami  sehingga  dapat  memberikan  kontribusi terbaik bagi kesejahteraan manusia serta bagi pengembangan keilmuan psikologi.
    </p>
  </div>
</div>


<div class="vision-mission-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Visi dan Misi</h2>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h3 class="text-primary fw-bold mb-3">Visi</h3>
          <p>Menjadi Lembaga Psikologi Terapan yang cepat dan berkualitas dalam analisis serta menjunjung tinggi profesionalisme.</p>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h3 class="text-primary fw-bold mb-3">Misi</h3>
          <ul class="text-muted ps-3">
            <li>Pelayanan mendalam dan cepat dengan mengedepankan kesejahteraan psikologis klien.</li>
            <li>Layanan profesional sesuai karakteristik kebutuhan klien.</li>
            <li>Bangun kemitraan sinergis dengan praktisi lain melalui kolaborasi.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="methods-section py-5 text-white" style="background:linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="bg-white bg-opacity-10 p-5 rounded-circle d-inline-block">
          <i class="bx bx-clipboard-data fs-1 text-white"></i>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-4">Metode</h2>
        <p class= "text-white">Proses pemeriksaan psikologis menggunakan metode kuantitatif dan kualitatif untuk gambaran lebih akurat.</p>
        <ul>
          <li>Paper & Pencil Test</li>
          <li>Interview</li>
          <li>Personal Counseling</li>
          <li>Special Test</li>
        </ul>
      
    </div>
  </div>
</div>

<!-- ===== CONTACT ===== -->
<div class="contact-section py-5" style="background:#1e293b;" id="contact">
  <div class="container text-center text-white">
    <h2 class="fw-bold mb-4">Hubungi Kami</h2>
    <p class="text-white-50 mb-5">Siap melayani kebutuhan psikologi Anda dengan profesional dan berkualitas</p>
    <div class="row justify-content-center mb-4">
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-phone fs-2 mb-2"></i>
          <h5>Telepon</h5>
          <p>(0341) 567-432 ext. 125</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-envelope fs-2 mb-2"></i>
          <h5>Email</h5>
          <p>lpt@unmer.ac.id</p>
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
      <a href="tel:0341567432" class="btn btn-outline-light rounded-pill me-3"><i class="bx bx-phone me-1"></i>Hubungi Sekarang</a>
      <a href="mailto:lpt@unmer.ac.id" class="btn btn-light rounded-pill text-primary fw-semibold"><i class="bx bx-envelope me-1"></i>Kirim Email</a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
