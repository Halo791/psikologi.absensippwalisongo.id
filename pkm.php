<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<!-- ===== HERO SECTION ===== -->
<div class="hero-section" style="background: linear-gradient(135deg,#22c55e 0%,#84cc16 50%,#facc15 100%);min-height:70vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:150px; padding-bottom:75px;">

  <div style="position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><defs><pattern id=\'grain\' width=\'100\' height=\'100\' patternUnits=\'userSpaceOnUse\'><circle cx=\'25\' cy=\'25\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/><circle cx=\'75\' cy=\'75\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/></pattern></defs><rect width=\'100\' height=\'100\' fill=\'url(%23grain)\'/></svg>');opacity:0.3;"></div>

  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 pad">Program<br><span style="color:#fef9c3;">Kreativitas Mahasiswa</span><br>(PKM)</h1>
        <p class="lead mb-4 text-white">
          PKM adalah wadah resmi dari Kemendikbudristek untuk mendorong mahasiswa Indonesia menyalurkan potensi kreatif, inovatif, serta mengimplementasikan Tridharma Perguruan Tinggi melalui karya nyata yang bermanfaat bagi masyarakat.
        </p>
        <a href="#layanan" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-semibold shadow">IKUTI PKM</a>
      </div>
      <div class="col-lg-6 text-center">
        <div style="background:rgba(255,255,255,0.15);border-radius:20px;padding:20px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);">
          <img src="uploads/pkm.png" alt="PKM Services" class="img-fluid rounded-3" style="max-width:400px;box-shadow:0 20px 40px rgba(0,0,0,0.1);">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== TUJUAN PKM ===== -->
<div class="vision-mission-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Tujuan Utama PKM</h2>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
          <h4 class="text-success fw-bold">Meningkatkan Kualitas</h4>
          <p>Mengembangkan kreativitas, inovasi, serta jiwa wirausaha mahasiswa.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
          <h4 class="text-success fw-bold">Menyalurkan Ide Kreatif</h4>
          <p>Mewujudkan gagasan dalam bentuk proposal ilmiah dan produk nyata.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
          <h4 class="text-success fw-bold">Tridharma Perguruan Tinggi</h4>
          <p>Mengaplikasikan ilmu dan teknologi untuk kepentingan masyarakat.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
          <h4 class="text-success fw-bold">Menumbuhkan Keterampilan</h4>
          <p>Mengembangkan keterampilan berpikir kritis, kreatif, dan kolaboratif.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== JENIS PKM ===== -->
<div class="services-section py-5 text-white" style="background:linear-gradient(135deg,#22c55e 0%,#84cc16 50%,#facc15 100%);" id="layanan">
  <div class="container text-center">
    <h2 class="fw-bold mb-3 text-white">Jenis Kegiatan PKM</h2>
    <p class="text-white-50 mb-5">PKM terdiri dari berbagai bidang kegiatan mahasiswa.</p>
    <div class="row g-4">
      <?php 
      $jenis_pkm = [
        "PKM Riset Eksakta (PKM-RE)", 
        "PKM Riset Sosial Humaniora (PKM-RSH)", 
        "PKM Kewirausahaan (PKM-K)", 
        "PKM Pengabdian Masyarakat (PKM-PM)", 
        "PKM Penerapan IPTEK (PKM-PI)", 
        "PKM Karya Cipta (PKM-KC)", 
        "PKM Karya Inovatif (PKM-KI)", 
        "PKM Video Gagasan Futuristik (PKM-GFT)", 
        "PKM Artikel Ilmiah (PKM-AI)"
      ];
      foreach($jenis_pkm as $jenis): ?>
        <div class="col-lg-4 col-md-6">
          <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-dark">
            <h5 class="fw-bold"><?= $jenis ?></h5>
            <p>Bidang kegiatan dalam PKM untuk mengembangkan ide dan kreativitas mahasiswa.</p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ===== PROSES PELAKSANAAN (TIMELINE) ===== -->
<div class="process-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Proses Pelaksanaan PKM</h2>
    <div class="row text-center justify-content-center">
      <div class="col-md-3 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-success">01</h4>
          <p><b>Pengusulan Proposal</b><br>Mahasiswa mengajukan proposal melalui Simbelmawa.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-success">02</h4>
          <p><b>Seleksi</b><br>Proposal diseleksi di tingkat perguruan tinggi.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-success">03</h4>
          <p><b>Pendanaan & Pelaksanaan</b><br>Proposal yang lolos akan didanai dan diimplementasikan.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h4 class="fw-bold text-success">04</h4>
          <p><b>Pendampingan</b><br>Dosen pembimbing mendampingi pelaksanaan kegiatan.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===== CONTACT ===== -->
<div class="contact-section py-5" style="background:#14532d;" id="contact">
  <div class="container text-center text-white">
    <h2 class="fw-bold mb-4">Kontak Admin PKM</h2>
    <p class="text-white-50 mb-5">Hubungi admin untuk informasi lebih lanjut mengenai Program Kreativitas Mahasiswa.</p>
    <div class="row justify-content-center mb-4">
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-phone fs-2 mb-2"></i>
          <h5>Telepon</h5>
          <p>(0341) 567-890 ext. 200</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-envelope fs-2 mb-2"></i>
          <h5>Email</h5>
          <p>pkm@unmer.ac.id</p>
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
      <a href="tel:0341567890" class="btn btn-outline-light rounded-pill me-3"><i class="bx bx-phone me-1"></i>Hubungi Admin</a>
      <a href="mailto:pkm@unmer.ac.id" class="btn btn-light rounded-pill text-success fw-semibold"><i class="bx bx-envelope me-1"></i>Kirim Email</a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
