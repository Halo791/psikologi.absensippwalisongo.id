<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>


<div class="hero-section" style="background: linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);min-height:70vh;display:flex;align-items:center;position:relative;overflow:hidden;padding-top:150px; padding-bottom:75px;">

  <div style="position:absolute;top:0;left:0;right:0;bottom:0;background:url('data:image/svg+xml,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><defs><pattern id=\'grain\' width=\'100\' height=\'100\' patternUnits=\'userSpaceOnUse\'><circle cx=\'25\' cy=\'25\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/><circle cx=\'75\' cy=\'75\' r=\'1\' fill=\'%23ffffff\' opacity=\'0.1\'/></pattern></defs><rect width=\'100\' height=\'100\' fill=\'url(%23grain)\'/></svg>');opacity:0.3;"></div>
  <div style="position:absolute;bottom:0;left:0;width:100%;height:100px;background:linear-gradient(to right,rgba(255,255,255,0.1),rgba(255,255,255,0.05));clip-path:polygon(0 70%,100% 100%,0 100%);"></div>

  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 pad">Lembaga<br><span style="color:#F3E8FF;">Psikologi</span><br>Terapan</h1>
        <p class="lead mb-4 text-white">Memberikan layanan jasa dan praktik psikologi di bidang Pendidikan-Perkembangan, Klinis, maupun Industri/Organisasi.</p>
        <a href="https://wa.me/6285393386211?text=Halo%20Fakultas%20Psikologi%20UNMER%20Malang,%20saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20program%20dan%20layanan%20yang%20tersedia."
        class="default-btn"
        target="_blank">
        Hubungi LPT Psikologi Kami
        </a>
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
    <p class="text-muted mb-5">Kami menyediakan berbagai layanan psikologi profesional untuk kebutuhan individu, siswa, maupun perusahaan.</p>

    <div class="row g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <i class="bx bx-briefcase-alt fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i>
          </div>
          <h4 class="fw-bold text-primary">Asesmen Psikologi Karyawan</h4>
          <p class="text-muted">Rekrutmen, pengembangan, dan penempatan karyawan dengan hasil asesmen berbasis kompetensi.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <i class="bx bx-book-content fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i>
          </div>
          <h4 class="fw-bold text-primary">Asesmen Psikologi Siswa</h4>
          <p class="text-muted">Meliputi placement test, tes bakat dan minat, IQ, serta kepribadian untuk mendukung perkembangan belajar.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <i class="bx bx-chat fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i>
          </div>
          <h4 class="fw-bold text-primary">Konseling</h4>
          <p class="text-muted">Layanan konseling untuk membantu individu mengatasi permasalahan pribadi, akademik, maupun karier.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <i class="bx bx-brain fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i>
          </div>
          <h4 class="fw-bold text-primary">Psikoterapi</h4>
          <p class="text-muted">Pendekatan terapeutik untuk membantu klien mencapai keseimbangan emosional dan mental yang lebih baik.</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <i class="bx bx-bar-chart-alt-2 fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i>
          </div>
          <h4 class="fw-bold text-primary">Pengembangan Pelatihan</h4>
          <p class="text-muted">Rancang program pelatihan pengembangan diri, kepemimpinan, dan teamwork yang sesuai kebutuhan organisasi.</p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-3">
            <i class="bx bx-rocket fs-1 text-white p-3 rounded-3" style="background:linear-gradient(135deg,#8B5CF6,#A855F7);"></i>
          </div>
          <h4 class="fw-bold text-primary">Outbound & Training</h4>
          <p class="text-muted">Kegiatan pelatihan luar ruangan yang interaktif dan menyenangkan untuk membangun kerja sama dan motivasi tim.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ===== PROFILE ===== -->
<!-- ===== PROFIL KAMI + RINCIAN LAYANAN ===== -->
<div class="profile-section py-5 text-white" 
     style="background:linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);">
  <div class="container" style="max-width: 900px;"> 
    <h2 class="fw-bold text-center mb-4">Profil Kami</h2>
    <p class="lead text-center mb-5 text-white" 
       style="line-height:1.8; font-size:1.1rem;">
      Lembaga Psikologi Terapan (LPT) merupakan sebuah lembaga di bawah naungan Fakultas Psikologi Universitas Merdeka Malang yang memberikan layanan jasa dan praktik psikologi di bidang Pendidikan-Perkembangan, Klinis, maupun Industri/Organisasi. Lembaga ini didirikan pada tahun 2008 di Malang oleh para Psikolog dan Struktural Fakultas Psikologi Universitas Merdeka Malang.
    </p>

    <h3 class="text-center fw-bold mb-3 text-white">Komitmen Kami</h3> 
    <p class="text-center text-white mb-5" style="line-height:1.8; font-size:1.05rem;">
      Kami memiliki komitmen bahwa dalam setiap penyelenggaraan layanan jasa dan praktik psikologi, kami akan senantiasa meningkatkan pengetahuan mengenai psikologi manusia. Melalui peningkatan pengetahuan tersebut, kami bertekad untuk terus meningkatkan kemampuan profesional kami sehingga dapat memberikan kontribusi terbaik bagi kesejahteraan manusia serta bagi pengembangan keilmuan psikologi.
    </p>

    <!-- Accordion -->
    <div class="accordion" id="layananAccordion">
      
      <!-- Bidang Pendidikan -->
      <div class="accordion-item bg-transparent border-white border-2 rounded-3 mb-3">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Bidang Pendidikan
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#layananAccordion">
          <div class="accordion-body bg-white text-dark">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr>
                    <th>No.</th>
                    <th>Tujuan</th>
                    <th>Metode</th>
                    <th>Materi Psikotes</th>
                    <th>Waktu Tes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Seleksi masuk SMP/SMA</td><td>Paper & Pencil</td><td>Tes intelegensi, tes kepribadian</td><td>± 3 jam</td></tr>
                  <tr><td>2</td><td>Penjurusan SMA</td><td>Paper & Pencil</td><td>Tes intelegensi, tes bakat, tes minat, tes gaya belajar, tes kepribadian</td><td>± 3 jam</td></tr>
                  <tr><td>3</td><td>Penjurusan Perguruan Tinggi</td><td>Paper & Pencil</td><td>Tes intelegensi, tes bakat, tes minat, tes gaya belajar, tes kepribadian</td><td>± 3 jam</td></tr>
                  <tr><td>4</td><td>Review Potensi (individual)</td><td>Paper & Pencil & Konseling Pribadi</td><td>Tes intelegensi, tes bakat, tes minat, tes kepribadian, gaya belajar, komitmen, tes kreativitas</td><td>± 4 jam</td></tr>
                  <tr><td>5</td><td>Diagnosis Inklusi</td><td>Special test & Interview</td><td>Tes intelegensi, tes bakat, tes minat, tes kepribadian</td><td>± 4 jam</td></tr>
                  <tr><td>6</td><td>Mengetahui kesiapan sekolah siswa</td><td>Paper & Pencil & Interview</td><td>Tes kesiapan sekolah</td><td>± 1–2 jam</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Bidang Industri dan Organisasi -->
      <div class="accordion-item bg-transparent border-white border-2 rounded-3 mb-3">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Bidang Industri dan Organisasi
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#layananAccordion">
          <div class="accordion-body bg-white text-dark">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Tujuan</th>
                    <th>Metode</th>
                    <th>Output</th>
                    <th>Waktu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Rekrutmen dan Seleksi</td>
                    <td>Tes Psikologi & Interview</td>
                    <td>Laporan Singkat & Lengkap Level Pelaksana</td>
                    <td>4 jam</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Review Potensi (Potential Review)</td>
                    <td>Tes Psikologi & Interview</td>
                    <td>Laporan Singkat & Lengkap Level Pelaksana/Manajerial</td>
                    <td>4 jam</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Training (Pelatihan) Peningkatan Kompetensi SDM</td>
                    <td>In Class / Outdoor Activity</td>
                    <td>Disesuaikan dengan kebutuhan pelatihan</td>
                    <td>Menyesuaikan durasi</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Bidang Klinis dan Perkembangan -->
      <div class="accordion-item bg-transparent border-white border-2 rounded-3">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Bidang Klinis dan Perkembangan
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#layananAccordion">
          <div class="accordion-body bg-white text-dark">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Tujuan</th>
                    <th>Metode</th>
                    <th>Materi</th>
                    <th>Waktu Tes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Diagnosis Inklusi</td><td>Special Test & Interview</td><td>Tes intelegensi, tes bakat, tes minat, tes kepribadian</td><td>± 4 jam</td></tr>
                  <tr><td>2</td><td>Diagnosis & Terapi</td><td>Special Test & Interview</td><td>Menyesuaikan kebutuhan</td><td>± 4 jam</td></tr>
                  <tr><td>3</td><td>Solving Personal Problem</td><td>Konseling</td><td>Menyesuaikan kebutuhan</td><td>–</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End Accordion -->
  </div>
</div>

<!-- Bootstrap JS (pastikan ada di bawah) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



<!-- ===== MITRA KAMI ===== -->
<section class="partners-section py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4 text-dark">Mitra Kami</h2>
    <p class="text-muted mb-5">Kami telah menjalin kerja sama dengan berbagai instansi dan lembaga terpercaya.</p>

    <div class="row row-cols-2 row-cols-md-4 g-4 align-items-center justify-content-center">
      <!-- Logo 1 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/pemkot_batu.png" alt="Pemerintah Kota Batu" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 2 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/lyondellbasell.png" alt="PT Lyondellbasell" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 3 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/beon.png" alt="PT BEON" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 4 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/pdam_batu.png" alt="PDAM Kota Batu" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 5 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/indogrosir.png" alt="Indogrosir" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 6 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/upm.png" alt="Universitas Panca Marga Probolinggo" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 7 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/itn.png" alt="Institut Teknologi Nasional Malang" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 8 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/desa_tulusrejo.png" alt="Pemerintah Desa Tulus Rejo" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 9 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/bumiaji.png" alt="Pemerintah Kecamatan Bumiaji" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 10 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/man1.png" alt="MAN 1 Kota Malang" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 11 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/man2.png" alt="MAN 2 Kota Malang" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 12 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/smk2.png" alt="SMK 2 Malang" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 13 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/poltekpel.png" alt="Politeknik Pelayaran Surabaya" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 14 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/smpkypk1.png" alt="SMPK YPK 1 Malang" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 15 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/smk_amanah.png" alt="SMK Amanah Husada Batu" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 16 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/smk_adi_husada.png" alt="SMK Adi Husada Batu" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 17 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/smp_kartika.png" alt="SMP Kartika IV Malang" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
      <!-- Logo 18 -->
      <div class="col">
        <div class="bg-white rounded-4 shadow-sm p-3">
          <img src="Template_file/canyon/assets/img/mitra/smp_bina_budi.png" alt="SMP Bina Budi Mulya" class="img-fluid" style="max-height:70px; object-fit:contain;">
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ===== PSIKOLOG KAMI SECTION ===== -->
<!-- ===== PSIKOLOG KAMI SECTION (GRID FOTO) ===== -->
<div class="psychologists-section py-5 bg-light" id="psikolog" style="background:linear-gradient(135deg,#8B5CF6 0%,#A855F7 50%,#C084FC 100%);">
  <div class="container">
    <h2 class="fw-bold text-center mb-5 text-dark">Psikolog Kami</h2>
    <div class="row justify-content-center">

      <!-- Psikolog 1 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/nawang.png" alt="Nawang Warsi Wulandari" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Dr. Nawang Warsi Wulandari, S.Psi., M.Si., Psikolog</h4>
            <p class="text-muted">Psikologi Pendidikan & Psikologi Keluarga</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 2 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/agustin.png" alt="Agustin Rahmawati" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Dr. Agustin Rahmawati, S.Psi., M.Si., Psikolog</h4>
            <p class="text-muted">Psikologi Klinis & Pengembangan Diri</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 3 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/althuba.png" alt="Al Thuba Septa Priyanggasari" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Al Thuba Septa Priyanggasari, S.Psi., M.Psi., Psikolog</h4>
            <p class="text-muted">Psikologi Industri & Organisasi</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 4 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/ritna.png" alt="Ritna Sandri" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Ritna Sandri, S.Psi., M.Psi., Psikolog</h4>
            <p class="text-muted">Psikologi Anak & Remaja</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 5 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/eka.png" alt="Eka Indah Nurmawati" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Eka Indah Nurmawati, S.Psi., M.Psi., Psikolog</h4>
            <p class="text-muted">Psikologi Pendidikan & Konseling</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 6 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/firlia.png" alt="Firlia Candra Kartika" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Firlia Candra Kartika, S.Psi., M.Psi., Psikolog</h4>
            <p class="text-muted">Psikologi Sosial & Layanan Konseling</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 7 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/lukman.png" alt="Lukman Hakim" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Lukman Hakim, S.Psi., M.Psi., Psikolog</h4>
            <p class="text-muted">Psikologi Industri & SDM</p>
          </div>
        </div>
      </div>

      <!-- Psikolog 8 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <div class="faculty-card text-center bg-white rounded-4 shadow-sm p-3 h-100">
          <div class="image mb-3">
            <img src="Template_file/canyon/assets/img/dosen/nuurul.png" alt="Nuurul Ilaahi Rahmawati" class="img-fluid rounded-circle" style="width:160px; height:160px; object-fit:cover;">
          </div>
          <div class="content">
            <h4 class="fw-bold text-primary">Nuurul Ilaahi Rahmawati, S.Psi., M.Psi., Psikolog</h4>
            <p class="text-muted">Psikologi Pendidikan & Pengembangan Anak</p>
          </div>
        </div>
      </div>

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
          <h5>WhatsApp</h5>
            <p>
            <a href="https://wa.me/6285393386211" target="_blank" class="text-success fw-semibold text-decoration-none">
                <i class="bi bi-whatsapp me-2"></i>Hubungi LPT Kami
            </a>
            </p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100">
          <i class="bx bx-envelope fs-2 mb-2"></i>
          <h5>Email</h5>
          <h8>lpt.psikologi@unmer.ac.id</h8>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="p-4 rounded-3 bg-white bg-opacity-10 h-100 text-white">
            <i class="bx bx-map fs-2 mb-2"></i>
            <h5>Alamat</h5>
            <p class="mb-3">
            Gedung Fakultas Psikologi<br>
            Universitas Merdeka Malang<br>
            </p>

            <!-- Google Maps Embed -->
            <div class="ratio ratio-4x3 rounded-3 overflow-hidden shadow-sm">
            <iframe 
                src="https://www.google.com/maps?q=Gedung+Fakultas+Psikologi+Universitas+Merdeka+Malang&hl=id&z=16&output=embed" 
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            </div>
        </div>
        </div>

    </div>
    <div>
    <a href="https://wa.me/6285393386211" target="_blank" class="btn btn-outline-success rounded-pill me-3">
  <i class="bi bi-whatsapp me-1"></i>Hubungi LPT Kami
</a>

      <a href="mailto:lpt.psikologi@unmer.ac.id" class="btn btn-light rounded-pill text-primary fw-semibold"><i class="bx bx-envelope me-1"></i>Kirim Email</a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
