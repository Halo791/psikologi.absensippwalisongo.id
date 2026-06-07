<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<!-- HERO -->
<section class="hero-section d-flex align-items-center text-white" 
    style="background:linear-gradient(135deg,#7b42f6,#b01eff);
           min-height:90vh;position:relative;overflow:hidden;">
  <div class="container text-center" data-aos="zoom-in" data-aos-delay="200">
    <h1 class="display-3 fw-bold mb-3">
      <span id="typed-text"></span>
    </h1>
    <p class="lead mb-4 text-light">
      Membantu memahami, mendiagnosis, dan menangani masalah kesehatan mental, emosional, dan perilaku.
    </p>
    <a href="#tentang" class="btn btn-light btn-lg rounded-pill shadow px-4">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- TENTANG -->
<section id="tentang" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4" data-aos="fade-right">
        <img src="Template_file/canyon/assets/img/peminatan/clinical-psychology.jpg" alt="Psikologi Klinis" 
             class="img-fluid rounded-4 shadow">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="fw-bold mb-3">Apa itu Psikologi Klinis?</h2>
        <p class="text-muted">
          Psikologi Klinis adalah cabang psikologi yang fokus pada pemahaman, diagnosis, 
          dan pengobatan masalah kesehatan mental, emosional, dan perilaku pada individu, pasangan, keluarga, serta kelompok. 
          Praktisi menggunakan wawancara klinis, observasi, dan tes psikometrik untuk menilai kondisi klien serta memberikan terapi.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- TUGAS & PERAN -->
<section class="py-5 text-white" style="background:linear-gradient(135deg,#7b42f6,#b01eff);">
  <div class="container text-center">
    <h2 class="fw-bold mb-5" data-aos="fade-up">Tugas & Peran Psikolog Klinis</h2>
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6" data-aos="flip-left">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-search-alt fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Assessment</h5>
          <p class="text-muted small">Wawancara klinis, observasi, dan tes psikometrik.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="flip-left" data-aos-delay="100">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-dna fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Diagnosis</h5>
          <p class="text-muted small">Mengidentifikasi depresi, kecemasan, trauma, dll.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="flip-left" data-aos-delay="200">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-message-rounded-dots fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Intervensi</h5>
          <p class="text-muted small">Terapi psikologis seperti CBT & konseling.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="flip-left" data-aos-delay="300">
        <div class="p-4 bg-white text-dark rounded-4 shadow h-100">
          <i class="bx bx-support fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Konsultasi</h5>
          <p class="text-muted small">Memberikan saran untuk individu & komunitas.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KASUS -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" data-aos="fade-up">Kasus yang Ditangani</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="zoom-in">
        <div class="card h-100 shadow-sm text-center p-3">
          <img src="uploads/anxiety.jpg" class="card-img-top rounded" alt="Gangguan Kecemasan" style="height:150px;object-fit:cover;">
          <h6 class="fw-bold mt-3">Gangguan Kecemasan & Depresi</h6>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="card h-100 shadow-sm text-center p-3">
          <img src="uploads/trauma.jpg" class="card-img-top rounded" alt="Trauma" style="height:150px;object-fit:cover;">
          <h6 class="fw-bold mt-3">Trauma & PTSD</h6>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="card h-100 shadow-sm text-center p-3">
          <img src="uploads/behavior.jpg" class="card-img-top rounded" alt="Gangguan Perilaku" style="height:150px;object-fit:cover;">
          <h6 class="fw-bold mt-3">Gangguan Perilaku</h6>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="card h-100 shadow-sm text-center p-3">
          <img src="uploads/autism.jpg" class="card-img-top rounded" alt="Autisme" style="height:150px;object-fit:cover;">
          <h6 class="fw-bold mt-3">Autisme & Perkembangan</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TIMELINE -->
<section class="py-5 text-white" style="background:linear-gradient(135deg,#7b42f6,#b01eff);">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Menjadi Psikolog Klinis</h2>
    <div class="timeline">
      <div class="row mb-4" data-aos="fade-right">
        <div class="col-md-6"><h5 class="fw-bold">1. Sarjana Psikologi</h5></div>
        <div class="col-md-6 text-light">Lulus S1 Psikologi sebagai dasar keilmuan.</div>
      </div>
      <div class="row mb-4" data-aos="fade-left">
        <div class="col-md-6"><h5 class="fw-bold">2. Magister Profesi Klinis</h5></div>
        <div class="col-md-6 text-light">Mendalami pendidikan profesi psikologi klinis.</div>
      </div>
      <div class="row mb-4" data-aos="fade-right">
        <div class="col-md-6"><h5 class="fw-bold">3. Sidang Profesi & IPK</h5></div>
        <div class="col-md-6 text-light">Mengikuti ujian profesi & menjadi anggota IPK Indonesia.</div>
      </div>
      <div class="row" data-aos="fade-left">
        <div class="col-md-6"><h5 class="fw-bold">4. STR & SIP</h5></div>
        <div class="col-md-6 text-light">Mengurus izin resmi untuk praktik.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 text-center bg-dark text-white">
  <div class="container" data-aos="zoom-in">
    <h2 class="fw-bold mb-3">Butuh Konsultasi Psikologi Klinis?</h2>
    <p class="text-light mb-4">Kami siap membantu dengan pendekatan profesional & berbasis ilmiah.</p>
    <a href="mailto:husnul.khotimah@unmer.ac.id" class="default-btn">Hubungi Kami</a>

  </div>
</section>

<!-- JS -->
<script src="Template_file/canyon/assets/js/jquery.min.js"></script>
<script src="Template_file/canyon/assets/js/aos.js"></script>
<script src="Template_file/canyon/assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  AOS.init({duration:1000, once:true});

  // Typed.js untuk hero
  var typed = new Typed("#typed-text", {
    strings: ["Psikologi Klinis", "Konseling", "Terapi", "Assessment & Diagnosis"],
    typeSpeed: 60,
    backSpeed: 40,
    backDelay: 2000,
    loop: true
  });
</script>

<?php include 'templates/footer.php'; ?>
