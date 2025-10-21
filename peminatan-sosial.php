<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<!-- HERO -->
<section class="hero-section d-flex align-items-center text-white" 
    style="background:linear-gradient(135deg,#1e3a8a,#d946ef);
           min-height:90vh;position:relative;overflow:hidden;">
  <div class="container text-center" data-aos="zoom-in" data-aos-delay="200">
    <h1 class="display-3 fw-bold mb-3">
      <span id="typed-text"></span>
    </h1>
    <p class="lead mb-4 text-light">
      Psikologi Sosial mempelajari bagaimana pikiran, perasaan, dan perilaku dipengaruhi oleh orang lain & lingkungan sosial.
    </p>
    <a href="#tentang" class="btn btn-light btn-lg rounded-pill shadow px-4">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- TENTANG -->
<section id="tentang" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4" data-aos="fade-right">
        <img src="Template_file/canyon/assets/img/peminatan/social-psychology.jpg" 
             alt="Psikologi Sosial" class="img-fluid rounded-4 shadow">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="fw-bold mb-3">Apa itu Psikologi Sosial?</h2>
        <p class="text-muted">
          Psikologi sosial adalah cabang psikologi yang mempelajari bagaimana pikiran, perasaan, 
          dan perilaku individu dipengaruhi oleh kehadiran orang lain, baik nyata, imajiner, 
          maupun implisit. Fokus utamanya adalah interaksi individu dengan kelompok, serta 
          bagaimana norma sosial, budaya, dan lingkungan membentuk perilaku manusia.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- APA YANG DIPERLAJARI -->
<section class="py-5 text-white" style="background:linear-gradient(135deg,#1e3a8a,#d946ef);">
  <div class="container text-center">
    <h2 class="fw-bold mb-5" data-aos="fade-up">Apa yang Dipelajari Psikologi Sosial?</h2>
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6" data-aos="flip-left">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-search-alt fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Persepsi Sosial</h5>
          <p class="text-muted small">Bagaimana kita menafsirkan & memahami orang lain serta situasi sosial.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="flip-left" data-aos-delay="100">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-group fs-1 text-pink"></i>
          <h5 class="fw-bold mt-3">Dinamika Kelompok</h5>
          <p class="text-muted small">Interaksi dalam kelompok: kepemimpinan, komunikasi, konflik.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="flip-left" data-aos-delay="200">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-shape-triangle fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Pengaruh Sosial</h5>
          <p class="text-muted small">Dampak norma, budaya, & lingkungan terhadap perilaku individu.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="flip-left" data-aos-delay="300">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-happy-beaming fs-1 text-pink"></i>
          <h5 class="fw-bold mt-3">Perilaku Sosial</h5>
          <p class="text-muted small">Studi perilaku manusia dalam kehidupan bermasyarakat.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PENERAPAN -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" data-aos="fade-up">Penerapan dalam Kehidupan Sehari-hari</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="zoom-in">
        <div class="card h-100 shadow-sm text-center p-4">
          <i class="bx bx-heart fs-1 text-primary"></i>
          <h6 class="fw-bold mt-3">Kesehatan</h6>
          <p class="text-muted small">Kampanye perilaku sehat seperti olahraga & berhenti merokok.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="card h-100 shadow-sm text-center p-4">
          <i class="bx bx-leaf fs-1 text-success"></i>
          <h6 class="fw-bold mt-3">Lingkungan</h6>
          <p class="text-muted small">Mendorong perilaku ramah lingkungan & keberlanjutan.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="card h-100 shadow-sm text-center p-4">
          <i class="bx bx-briefcase fs-1 text-warning"></i>
          <h6 class="fw-bold mt-3">Tempat Kerja</h6>
          <p class="text-muted small">Meningkatkan komunikasi, mengelola konflik, & budaya positif.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="card h-100 shadow-sm text-center p-4">
          <i class="bx bx-building fs-1 text-danger"></i>
          <h6 class="fw-bold mt-3">Kebijakan Publik</h6>
          <p class="text-muted small">Merancang kebijakan yang efektif dalam mengatasi masalah sosial.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PENGARUH -->
<section class="py-5 text-white" style="background:linear-gradient(135deg,#1e3a8a,#d946ef);">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" data-aos="fade-up">Bagaimana Psikologi Sosial Memengaruhi Perilaku?</h2>
    <div class="timeline">
      <div class="row mb-4" data-aos="fade-right">
        <div class="col-md-6"><h5 class="fw-bold">Kehadiran Orang Lain</h5></div>
        <div class="col-md-6 text-light">Perilaku seseorang berubah saat sendiri vs ada orang lain.</div>
      </div>
      <div class="row mb-4" data-aos="fade-left">
        <div class="col-md-6"><h5 class="fw-bold">Norma & Budaya</h5></div>
        <div class="col-md-6 text-light">Membentuk cara berpikir, merasa, & bertindak.</div>
      </div>
      <div class="row" data-aos="fade-right">
        <div class="col-md-6"><h5 class="fw-bold">Situasi Sosial</h5></div>
        <div class="col-md-6 text-light">Kondisi tertentu seperti frustrasi dapat memicu agresi.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 text-center bg-dark text-white">
  <div class="container" data-aos="zoom-in">
    <h2 class="fw-bold mb-3">Tertarik dengan Psikologi Sosial?</h2>
    <p class="text-light mb-4">Mari pahami bagaimana interaksi sosial membentuk perilaku manusia.</p>
    <a href="mailto:agustin.rahmawati@unmer.ac.id" class="default-btn">Hubungi Kami</a>
  </div>
</section>

<!-- JS -->
<script src="Template_file/canyon/assets/js/jquery.min.js"></script>
<script src="Template_file/canyon/assets/js/aos.js"></script>
<script src="Template_file/canyon/assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  AOS.init({duration:1000, once:true});

  // Typed.js animasi teks
  var typed = new Typed("#typed-text", {
    strings: ["Psikologi Sosial", "Interaksi & Kelompok", "Pengaruh Sosial"],
    typeSpeed: 60,
    backSpeed: 40,
    backDelay: 2000,
    loop: true
  });
</script>

<?php include 'templates/footer.php'; ?>
