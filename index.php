<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<style>
    .card-title a {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 6px;
        background: #f8f9fa;
        color: #333;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .card-title a:hover {
        background: linear-gradient(135deg, #7b42f6, #b01eff);
        color: #fff !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transform: translateY(-2px);
        text-decoration: none;
    }
    #modalSambutan .modal-content {
    animation: fadeInUp 0.5s ease;
    }
    #modalSambutan img:hover {
    transform: scale(1.05);
    }
    @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
    }
    #modalTujuan .modal-content,
    #modalVisiMisi .modal-content {
    animation: fadeInUp 0.6s ease;
    }
    #modalTujuan li:hover,
    #modalVisiMisi li:hover {
    transform: translateX(5px);
    transition: all 0.3s ease;
    }
    @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
    }
    .sejarah-modal {
    background: rgba(20, 20, 30, 0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 18px;
    color: #f1f1f1;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
    animation: fadeInUp 0.6s ease;
    overflow: hidden;
    }

    .text-gradient {
    background: linear-gradient(135deg, #ff758c, #ff7eb3);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    }

    .scrollable-content {
    max-height: 400px;
    overflow-y: auto;
    padding-right: 10px;
    }

    .scrollable-content::-webkit-scrollbar {
    width: 8px;
    }
    .scrollable-content::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.3);
    border-radius: 10px;
    }
    .scrollable-content::-webkit-scrollbar-thumb:hover {
    background: rgba(255,255,255,0.5);
    }

    .sejarah-quote {
    font-style: italic;
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 15px;
    border-left: 4px solid #ff7eb3;
    border-radius: 10px;
    margin: 20px 0;
    color: #fff;
    }

    @keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }
    .org-chart {
    position: relative;
    }
    .org-chart .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .org-chart .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
    .org-node::after {
    content: "";
    display: block;
    width: 2px;
    height: 40px;
    background-color: #fff;
    margin: 10px auto;
    }
</style>


<main class="main-content">
    <section class="hero">
        <!-- Modal Event (Auto Show) -->
        
            </div>
            </div>
        </div>
        </div>
        <body>
         
        <div class="banner-area-2 big-bg-2">
                <!-- Tambahkan video background -->
                <video autoplay muted loop playsinline>
                    <source src="Template_file/canyon/assets/img/banner/video.mp4" type="video/mp4">
                    Browser kamu tidak mendukung video.
                </video>

                <div class="container">
                    <div class="banner-content-2">
                        <div class="content">
                            <span data-aos="fade-zoom-in" data-aos-delay="300">Universit Merdeka Malang</span>
                            <h1 data-aos="fade-up" data-aos-delay="200">Fakultas Psikologi </h1>
                            <p data-aos="fade-up" data-aos-delay="300">Membangun generasi psikolog yang kompeten, berintegritas, dan berdaya saing global melalui pendidikan berkualitas dan penelitian inovatif.</p>
                            <div class="buttons-action" data-aos="fade-up" data-aos-delay="100">
                                <a class="default-btn" href="application-form.html">Daftar Sekarang</a>
                            </div>
                            <div class="scroll-down" data-aos="fade-down" data-aos-delay="100">
                            <a href="#about"><i class='bx bx-chevron-down'></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

<section id="about" class="about-us-area-2 ptb-100">
  <div class="container">
    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
      <h2>Tentang Fakultas Kami</h2>
      <br>

      <div class="d-grid gap-3">
        <!-- Button 1 -->
        <button class="default-btn" data-bs-toggle="modal" data-bs-target="#modalSambutan">📣 Sambutan Dekan</button>
        <!-- Button 2 -->
        <button class="default-btn" data-bs-toggle="modal" data-bs-target="#modalSejarah">🏛️ Sejarah Kami</button>
        <button class="default-btn" data-bs-toggle="modal" data-bs-target="#modalVisiMisi">🌟 Visi dan Misi</button>
        <!-- Button 3 -->
        <button class="default-btn" data-bs-toggle="modal" data-bs-target="#modalTujuan">🎯 Tujuan Fakultas</button>
        <!-- Button 4 -->
        
      </div>
    </div>
  </div>
</section>


<!-- Modal Sambutan Dekan -->
<div class="modal fade" id="modalSambutan" tabindex="-1" aria-labelledby="modalSambutanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark text-light shadow-lg border-0 rounded-4 overflow-hidden">

      <!-- Header -->
      <div class="modal-header border-0 bg-gradient bg-secondary bg-opacity-50">
        <h5 class="modal-title fw-bold text-uppercase" id="modalSambutanLabel">
          <i class="bi bi-person-lines-fill me-2"></i> Sambutan Dekan
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-4 py-3">
        <div class="row align-items-center">

          <!-- Foto Dekan -->
          <div class="col-md-4 mb-4 mb-md-0 text-center">
            <div class="position-relative">
              <img src="Template_file/canyon/assets/img/banner/Dekan.png" 
                   alt="Foto Dekan" 
                   class="img-fluid rounded-3 shadow-lg border border-light" 
                   style="object-fit: cover; max-height: 300px; transition: transform 0.4s ease;">
              <div class="mt-3">
                <p class="fw-bold mb-0 fs-6 text-white">Dr. Nawang Warsi Wulandari, S.Psi., M.Si., Psikolog</p>
                <p class="fst-italic text-muted mb-0">Dekan Fakultas Psikologi</p>
              </div>
            </div>
          </div>

          <!-- Isi Sambutan -->
          <div class="col-md-8">
            <div class="p-3 bg-gradient bg-opacity-25 rounded-3" style="background: rgba(255,255,255,0.05);">
              <p class="mb-3">
                Fakultas Psikologi berkomitmen untuk memberikan pendidikan yang berkualitas dan relevan dengan perkembangan ilmu pengetahuan serta kebutuhan masyarakat.
              </p>
              <p class="mb-3">
                Kami berusaha menciptakan lingkungan akademik yang kondusif, di mana mahasiswa dapat mengembangkan potensi intelektual, emosional, dan sosialnya secara seimbang.
              </p>
              <p class="mb-0">
                Dengan pendekatan berbasis penelitian dan praktik, kami berupaya untuk mencetak lulusan yang kompeten, berintegritas, serta mampu memberikan kontribusi positif bagi masyarakat dan dunia profesional.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 justify-content-center bg-secondary bg-opacity-25">
        <small class="text-muted fst-italic">Fakultas Psikologi Universitas Merdeka Malang</small>
      </div>

    </div>
  </div>
</div>



<!-- Modal: Sejarah Kami -->
<!-- MODAL SEJARAH -->
<div class="modal fade" id="modalSejarah" tabindex="-1" aria-labelledby="modalSejarahLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content sejarah-modal">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-gradient" id="modalSejarahLabel">
          <i class="fa-solid fa-book-open me-2"></i> Sejarah Kami
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="scrollable-content">
          <p1>
            Fakultas Psikologi Universitas Merdeka Malang (UNMER Malang) memiliki sejarah yang cukup panjang. Fakultas ini didirikan pada tahun 2001 sebagai bagian dari komitmen Universitas Merdeka Malang untuk mengembangkan ilmu pengetahuan dan pendidikan di berbagai disiplin ilmu.
          </p1>

          <p1>
            Awalnya, fakultas ini berdiri untuk memenuhi kebutuhan akan tenaga profesional di bidang psikologi di Indonesia, khususnya di Malang dan sekitarnya. Seiring waktu, Fakultas Psikologi UNMER Malang terus berkembang dari segi kurikulum, fasilitas, tenaga pengajar, maupun jumlah mahasiswa.
          </p1>

          <blockquote class="sejarah-quote">
            “Fakultas Psikologi UNMER Malang berkomitmen mencetak lulusan yang unggul, beretika, dan siap bersaing di era global.”
          </blockquote>

          <p1>
            Fakultas Psikologi UNMER Malang telah mendapatkan akreditasi <strong>Baik</strong> dari <em>Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)</em> — sebuah pengakuan resmi atas kualitas pendidikan yang diberikan.
          </p1>

          <p1>
            Selain pendidikan, fakultas ini aktif dalam penelitian dan pengabdian masyarakat, seperti program konsultasi, seminar, serta kerja sama dengan lembaga pendidikan dan organisasi profesional dalam maupun luar negeri.
          </p1>

          <p1>
            Saat ini, Fakultas Psikologi UNMER Malang terus mengintegrasikan teknologi dan metode pembelajaran terbaru agar dapat menghasilkan lulusan yang kompeten dan siap menghadapi tantangan masa depan.
          </p1>
        </div>
      </div>

      <div class="modal-footer border-0 justify-content-center">
        <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">
          <i class="fa-solid fa-xmark me-1"></i> Tutup
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Tujuan Fakultas -->
<div class="modal fade" id="modalTujuan" tabindex="-1" aria-labelledby="modalTujuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark text-light shadow-lg border-0 rounded-4 overflow-hidden">

      <!-- Header -->
      <div class="modal-header border-0 bg-gradient bg-secondary bg-opacity-50">
        <h5 class="modal-title fw-bold text-uppercase" id="modalTujuanLabel">
          <i class="bi bi-bullseye me-2"></i> Tujuan Fakultas
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-4 py-3">
        <div class="p-4 bg-gradient bg-opacity-25 rounded-3" style="background: rgba(255,255,255,0.05);">
          <ul class="list-unstyled">
            <li class="mb-3 d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Meningkatkan kualitas penyelenggaraan program pendidikan S1 Psikologi untuk menghasilkan lulusan yang kompeten, berjiwa wirausaha, dan berdaya saing internasional.</span>
            </li>
            <li class="mb-3 d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Meningkatkan kuantitas dan kualitas penelitian dan pengabdian kepada masyarakat serta publikasi ilmiah.</span>
            </li>
            <li class="mb-3 d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Menumbuhkan tata kelola kelembagaan menuju “Good University Governance” berbasis Sistem Informasi Manajemen sebagai DSS.</span>
            </li>
            <li class="d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Meningkatkan kerjasama dengan institusi dalam dan luar negeri dengan prinsip kesetaraan.</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 justify-content-center bg-secondary bg-opacity-25">
        <small class="text-muted fst-italic">Fakultas Psikologi Universitas Merdeka Malang</small>
      </div>

    </div>
  </div>
</div>


<!-- Modal: Visi dan Misi -->
<div class="modal fade" id="modalVisiMisi" tabindex="-1" aria-labelledby="modalVisiMisiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark text-light shadow-lg border-0 rounded-4 overflow-hidden">

      <!-- Header -->
      <div class="modal-header border-0 bg-gradient bg-secondary bg-opacity-50">
        <h5 class="modal-title fw-bold text-uppercase" id="modalVisiMisiLabel">
          <i class="bi bi-eye-fill me-2"></i> Visi & Misi Fakultas
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-4 py-3">
        <div class="p-4 bg-gradient bg-opacity-25 rounded-3" style="background: rgba(255,255,255,0.05);">
          <h4 class="fw-bold text-warning mb-3"><i class="bi bi-lightbulb me-2"></i> Visi</h4>
          <p class="fst-italic mb-4">
            Menjadi Fakultas Psikologi terkemuka dalam pengembangan Sumber Daya Manusia seutuhnya yang berjiwa wirausaha pada skala nasional dan internasional.
          </p>

          <h4 class="fw-bold text-warning mb-3"><i class="bi bi-flag me-2"></i> Misi</h4>
          <ul class="list-unstyled">
            <li class="mb-3 d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Menyelenggarakan program pendidikan tinggi yang berkualitas pada jenis program pendidikan akademik.</span>
            </li>
            <li class="mb-3 d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Menyelenggarakan penelitian dan pengabdian kepada masyarakat serta publikasi ilmiah dalam bidang Psikologi.</span>
            </li>
            <li class="mb-3 d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Melaksanakan tata kelola Fakultas berbasis Sistem Informasi Manajemen sebagai DSS dengan prinsip “Good University Governance”.</span>
            </li>
            <li class="d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-3"></i>
              <span>Menjalin kemitraan strategis dengan institusi lain secara nasional maupun internasional.</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 justify-content-center bg-secondary bg-opacity-25">
        <small class="text-muted fst-italic">Fakultas Psikologi Universitas Merdeka Malang</small>
      </div>

    </div>
  </div>
</div>



                

            </div>
        </div>
        <!-- End About Us Area 2 -->

        <!-- Start Struktural Kami -->
<section id="struktur" class="struktur-area ptb-100" style="background: linear-gradient(135deg, #7b42f6, #b01eff);">
  <div class="container">
    
    <!-- Judul -->
    <div class="section-title text-center text-white" data-aos="fade-up" data-aos-delay="100">
      <h2 class="fw-bold text-uppercase mb-4">Struktur Organisasi Fakultas Psikologi</h2>
      <p class="text-light opacity-75">Universitas Merdeka Malang</p>
    </div>

    <!-- Diagram Struktur -->
    <div class="org-chart text-center">

      <!-- Dekan -->
      <div class="org-node dekan mx-auto mb-5" data-aos="fade-up">
        <div class="card shadow-lg border-0 p-3 bg-light bg-opacity-10 text-white d-inline-block">
          <img src="Template_file/canyon/assets/img/dosen/nawang.png" class="rounded-circle mb-3 shadow" style="width:110px; height:110px; object-fit:cover;">
          <h5 class="fw-bold mb-1">Dr. Nawang Warsi Wulandari, S.Psi., M.Si., Psikolog</h5>
          <p class="mb-0 text-warning">Dekan Fakultas Psikologi</p>
        </div>
      </div>

      <!-- Wakil Dekan -->
      <div class="row justify-content-center g-4 mb-5" data-aos="fade-up">
        <div class="col-md-5">
          <div class="card shadow-sm border-0 p-3 bg-dark text-light h-100">
            <div class="d-flex align-items-center">
              <img src="Template_file/canyon/assets/img/dosen/untung.png" class="rounded-circle me-3" style="width:90px; height:90px; object-fit:cover;">
              <div>
                <h6 class="fw-bold mb-1">M. Untung Manara, S.Psi., MA., Ph.D</h6>
                <p class="mb-0 text-warning">Wakil Dekan I</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="card shadow-sm border-0 p-3 bg-dark text-light h-100">
            <div class="d-flex align-items-center">
              <img src="Template_file/canyon/assets/img/dosen/agustin.png" class="rounded-circle me-3" style="width:90px; height:90px; object-fit:cover;">
              <div>
                <h6 class="fw-bold mb-1">Dr. Agustin Rahmawati, S.Psi., M.Si., Psikolog</h6>
                <p class="mb-0 text-warning">Wakil Dekan II</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Kaprodi dan Sekprodi -->
      <div class="row justify-content-center g-4 mb-5" data-aos="fade-up">
        <div class="col-md-5">
          <div class="card shadow-sm border-0 p-3 bg-dark text-light h-100">
            <div class="d-flex align-items-center">
              <img src="Template_file/canyon/assets/img/dosen/della.png" class="rounded-circle me-3" style="width:90px; height:90px; object-fit:cover;">
              <div>
                <h6 class="fw-bold mb-1">Dellawaty Supraba, S.Psi., M.Si</h6>
                <p class="mb-0 text-warning">Kepala Program Studi</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="card shadow-sm border-0 p-3 bg-dark text-light h-100">
            <div class="d-flex align-items-center">
              <img src="Template_file/canyon/assets/img/dosen/deasy.png" class="rounded-circle me-3" style="width:90px; height:90px; object-fit:cover;">
              <div>
                <h6 class="fw-bold mb-1">Deasy Christia Sera, S.Psi., M.Si</h6>
                <p class="mb-0 text-warning">Sekretaris Program Studi</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unit Penunjang -->
      <h3 class="text-white fw-bold text-uppercase mb-4" data-aos="fade-up">Unit Penunjang</h3>
      <div class="row justify-content-center g-3" data-aos="fade-up" data-aos-delay="150">
        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Al Thuba Septa Ps., S.Psi., M.Psi., Psikolog</h6>
            <p class="mb-0">Kepala Pusat Studi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Husnul Khotimah, S.Psi., M.A</h6>
            <p class="mb-0">Kepala Laboratorium Psikodiagnostik</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Dr. Rinto Wahyu Widodo, S.Psi., M.Th., M.Si</h6>
            <p class="mb-0">Koordinator Jurnal Psikologi Tabularasa</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Eka Indah Nurmawati, M.Psi., Psikolog</h6>
            <p class="mb-0">Kepala Laboratorium Perkembangan (PAUD)</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Firlia Candra Kartika, M.Psi., Psikolog</h6>
            <p class="mb-0">Ketua Lembaga Psikologi Terapan (LPT)</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Lukman Hakim, S.Psi., M.Psi., Psikolog</h6>
            <p class="mb-0">Pembina Komunitas MAHESA</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Richo Surya Pradana, S.Pd., M.Pd.</h6>
            <p class="mb-0">Pembina KOMPAS</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Nuurul Ilaahi Rahmawati, S.Psi., M.Psi., Psikolog</h6>
            <p class="mb-0">Pembina Podcast HARPSI</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Lutfi Hidayati Fauziah, S.Psi., M.Si</h6>
            <p class="mb-0">Pembina KOMENPSI / Koordinator Magang</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card bg-light bg-opacity-10 text-white border-0 shadow p-3 h-100">
            <h6 class="fw-bold mb-1">Uslarika Hida Rahma, S.Psi., MPsi.T</h6>
            <p class="mb-0">Koordinator Skripsi</p>
          </div>
        </div>
      </div>

      <!-- Tombol Arah -->
      <div class="text-center mt-5" data-aos="fade-up">
        <a href="dosen.php" class="default-btn" style="background-color:#ffc107; color:#000; border-radius:25px; padding:12px 25px;">
          <i class="bi bi-people-fill me-2"></i>Lebih Dekat dengan Pengajar Kami
        </a>
      </div>

    </div>
  </div>
</section>
<!-- End Struktural Kami -->



        <section id="peminatan" class="about-us-area-2 ptb-100 bg-light">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <h2>Bidang Peminatan Kami</h2>
                    <p>Fakultas Psikologi menawarkan beberapa bidang peminatan yang dapat dipilih mahasiswa sesuai minat dan karier mereka.</p>
                </div>

                <div class="row mt-4">
                    <!-- Card 1: Psikologi Klinis -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-sm text-center">
                            <a href="peminatan-klinis.php">
                                <img src="Template_file/canyon/assets/img/peminatan/clinical-psychology.jpg" class="card-img-top rounded-top" alt="Psikologi Klinis" style="height:200px; object-fit:cover;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="peminatan-klinis.php" class="stretched-link text-dark">Psikologi Klinis</a>
                                </h5>
                                <p class="card-text">Berfokus pada kesehatan mental, gangguan mental, dan intervensi psikologis untuk membantu individu yang memiliki masalah emosional atau perilaku.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Psikologi Industri dan Organisasi -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-sm text-center">
                            <a href="peminatan-io.php">
                                <img src="Template_file/canyon/assets/img/peminatan/industrial-psychology.jpg" class="card-img-top rounded-top" alt="Psikologi Industri dan Organisasi" style="height:200px; object-fit:cover;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="peminatan-io.php" class="stretched-link text-dark">Psikologi Industri dan Organisasi</a>
                                </h5>
                                <p class="card-text">Mempelajari perilaku manusia dalam konteks tempat kerja, seperti manajemen sumber daya manusia, rekrutmen, pengembangan kinerja, dan budaya organisasi.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Psikologi Perkembangan -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 shadow-sm text-center">
                            <a href="peminatan-perkembangan.php">
                                <img src="Template_file/canyon/assets/img/peminatan/developmental-psychology.jpg" class="card-img-top rounded-top" alt="Psikologi Perkembangan" style="height:200px; object-fit:cover;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="peminatan-perkembangan.php" class="stretched-link text-dark">Psikologi Perkembangan</a>
                                </h5>
                                <p class="card-text">Mempelajari perubahan psikologis manusia dari masa anak-anak hingga dewasa sepanjang hayatnya, termasuk perkembangan kognitif, emosional, dan sosial.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Psikologi Pendidikan -->
                    <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 shadow-sm text-center">
                            <a href="peminatan-pendidikan.php">
                                <img src="Template_file/canyon/assets/img/peminatan/educational-psychology.jpg" class="card-img-top rounded-top" alt="Psikologi Pendidikan" style="height:200px; object-fit:cover;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="peminatan-pendidikan.php" class="stretched-link text-dark">Psikologi Pendidikan</a>
                                </h5>
                                <p class="card-text">Berfokus pada proses belajar dan pembelajaran, serta bagaimana faktor psikologis memengaruhi efektivitas pendidikan pada individu dari berbagai usia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Psikologi Sosial -->
                    <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-sm text-center">
                            <a href="peminatan-sosial.php">
                                <img src="Template_file/canyon/assets/img/peminatan/social-psychology.jpg" class="card-img-top rounded-top" alt="Psikologi Sosial" style="height:200px; object-fit:cover;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="peminatan-sosial.php" class="stretched-link text-dark">Psikologi Sosial</a>
                                </h5>
                                <p class="card-text">Meneliti bagaimana pikiran, perasaan, dan perilaku individu dipengaruhi oleh lingkungan sosial dan interaksi antarindividu di dalam masyarakat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Start Events Area 2 -->
<div class="events-area-2 pt-100">
    <div class="container">
        <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <p>News and Events</p>
            </div>
            <h2>Recent Important Stories Updated</h2>
        </div>

        <!-- Featured Event -->
        <?php
        $q_featured = $conn->query("SELECT * FROM events WHERE category='featured' ORDER BY event_date DESC LIMIT 1");
        if ($row = $q_featured->fetch_assoc()):
        ?>
        <div class="event lg" data-aos="fade-up" data-aos-delay="100">
            <div class="content">
                <div class="image">
                    <img src="uploads/<?= $row['image'] ?>" alt="image">
                </div>
                <div class="text">
                    <div class="tag"><?= $row['tag'] ?></div>
                    <h2><a href="<?= $row['link'] ?>"><?= $row['title'] ?></a></h2>
                    <span><?= date("F d, Y", strtotime($row['event_date'])) ?></span>
                    <p><?= $row['description'] ?></p>
                    <div class="link"><a href="<?= $row['link'] ?>"><i class='bx bx-link-external'></i></a></div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Recent Posts -->
        <div class="row">
            <div class="col-lg-8">
                <div class="recent-post">
                    <h4 data-aos="fade-zoom-in" data-aos-delay="100">Recent News</h4>
                    <?php
                    $q_recent = $conn->query("SELECT * FROM events WHERE category='recent' ORDER BY event_date DESC LIMIT 5");
                    $delay = 100;
                    while ($row = $q_recent->fetch_assoc()):
                    ?>
                    <div class="event" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="content">
                            <div class="image">
                                <img src="uploads/<?= $row['image'] ?>" alt="image">
                            </div>
                            <div class="text">
                                <div class="tag"><?= $row['tag'] ?></div>
                                <h2><a href="<?= $row['link'] ?>"><?= $row['title'] ?></a></h2>
                                <span><?= date("F d, Y", strtotime($row['event_date'])) ?></span>
                                <p><?= $row['description'] ?></p>
                                <div class="link"><a href="<?= $row['link'] ?>"><i class='bx bx-link-external'></i></a></div>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 100; endwhile; ?>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="col-lg-4">
                <div class="upcoming-event">
                    <h4 data-aos="fade-zoom-in" data-aos-delay="100">Upcoming Events</h4>
                    <?php
                    $q_upcoming = $conn->query("SELECT * FROM events WHERE category='upcoming' ORDER BY event_date ASC LIMIT 4");
                    $delay = 100;
                    while ($row = $q_upcoming->fetch_assoc()):
                        $month = date('M', strtotime($row['event_date']));
                        $day = date('d', strtotime($row['event_date']));
                    ?>
                    <div class="event-dates" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="date">
                            <ul>
                                <li class="mnt"><?= $month ?></li>
                                <li class="det"><?= $day ?></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a href="<?= $row['link'] ?>"><?= $row['title'] ?></a></h3>
                            <p><?= $row['description'] ?></p>
                            <div class="location"><i class='bx bx-map'></i> <?= $row['location'] ?></div>
                            <div class="link"><a href="<?= $row['link'] ?>"><i class='bx bx-link-external'></i></a></div>
                        </div>
                    </div>
                    <?php $delay += 100; endwhile; ?>

                    <div class="event-dates" data-aos="fade-zoom-in" data-aos-delay="100">
                        <a class="btn" href="news-and-blog.html">View More Events <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Events Area 2 -->


        <!-- Start Success Area 2 -->
        <section class="success-area success-area-2 ptb-100 bg-green">
  <h2 class="text-center fw-bold mb-5">🎓 Testimoni Alumni Psikologi Unmer</h2>

  <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-5 mb-4">
              <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 20px;">
                <img src="Template_file/canyon/assets/img/Alvin.jpg" 
                     alt="Foto Alvin" 
                     class="rounded-circle mx-auto mb-3" 
                     style="width: 130px; height: 130px; object-fit: cover;">
                <h5 class="fw-bold mb-0">Alvin Andrean S., A.Md.Li., S.Psi., CRSS.</h5>
                <p class="text-primary fw-semibold mb-1">Talent Acquisition & Employer Branding Specialist</p>
                <p class="text-muted small mb-3">PT Merdeka Tsingshan Indonesia</p>
                <blockquote class="fst-italic text-secondary" style="border-left: 4px solid #8a2be2; padding-left: 10px;">
                  “Bangga menjadi bagian dari Psikologi Unmer. Di sini saya belajar tidak hanya berpikir kritis, tetapi juga berempati.”
                </blockquote>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5 mb-4">
              <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 20px;">
                <img src="Template_file/canyon/assets/img/alfin.png" 
                     alt="Foto Tommy" 
                     class="rounded-circle mx-auto mb-3" 
                     style="width: 130px; height: 130px; object-fit: cover;">
                <h5 class="fw-bold mb-0">Tommy Hari Firmanda, S.Psi., M.Si., M.Ed.</h5>
                <p class="text-primary fw-semibold mb-1">Konselor dan Peneliti Bidang Disabilitas</p>
                <p class="text-muted small mb-3">Australia-Indonesia Disability Research and Advocacy Network</p>
                <blockquote class="fst-italic text-secondary" style="border-left: 4px solid #8a2be2; padding-left: 10px;">
                  “Belajar di Psikologi Unmer Malang membuka banyak pintu kesempatan dan membentuk empati yang mendalam dalam profesi saya.”
                </blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container">
          <div class="row justify-content-center">

            <!-- Card 3 -->
            <div class="col-md-5 mb-4">
              <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 20px;">
                <img src="Template_file/canyon/assets/img/maria.jpg" 
                     alt="Foto Maria" 
                     class="rounded-circle mx-auto mb-3" 
                     style="width: 130px; height: 130px; object-fit: cover;">
                <h5 class="fw-bold mb-0">Maria Nikita, A.Md.Li., S.Psi.</h5>
                <p class="text-primary fw-semibold mb-1">People & Culture Specialist, APAC</p>
                <p class="text-muted small mb-3">Green Park Pte Ltd</p>
                <blockquote class="fst-italic text-secondary" style="border-left: 4px solid #8a2be2; padding-left: 10px;">
                  “Pengalaman saya di Psikologi Unmer membentuk fondasi kuat dalam memahami perilaku manusia dan bekerja lintas budaya.”
                </blockquote>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-5 mb-4">
              <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 20px;">
                <img src="Template_file/canyon/assets/img/grace.jpg" 
                     alt="Foto Grace" 
                     class="rounded-circle mx-auto mb-3" 
                     style="width: 130px; height: 130px; object-fit: cover;">
                <h5 class="fw-bold mb-0">Grace Latuheru, M.Psi., Psikolog</h5>
                <p class="text-primary fw-semibold mb-1">Dosen dan Psikolog Praktik Mandiri</p>
                <p class="text-muted small mb-3">Fakultas Kedokteran, Universitas Pattimura</p>
                <blockquote class="fst-italic text-secondary" style="border-left: 4px solid #8a2be2; padding-left: 10px;">
                  “Psikologi Unmer mengajarkan saya menjadi profesional yang berempati, beretika, dan tangguh dalam menghadapi dunia kerja.”
                </blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- End Success Area 2 -->



        <!-- Start Subscribe Area 2 -->
        <div class="subscribe-area subscribe-area-2">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Subscribe untuk Mendapatkan Update Terbaru Mengenai Kami!</p>
                    </div>
                    <h2>Dapatkan Event di Inbox Kamu</h2>
                </div>

                <div class="subscribe-form text-center" data-aos="fade-up" data-aos-delay="200">
                    <form action="subscribe_process.php" method="post" class="d-flex justify-content-center flex-wrap gap-2">
                        <input type="email" name="email" placeholder="Masukkan Email Kamu" required class="form-control w-50" style="max-width: 400px;">
                        <button type="submit" class="default-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area 2 -->


        

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>

        <!-- Links of JS files -->
        <!-- Links of JS files -->
        <script src="Template_file/canyon/assets/js/jquery.min.js"></script>
        <script src="Template_file/canyon/assets/js/aos.js"></script>
        <script src="Template_file/canyon/assets/js/bootstrap.min.js"></script>
        <script src="Template_file/canyon/assets/js/magnific-popup.min.js"></script>
        <script src="Template_file/canyon/assets/js/owl.carousel.min.js"></script>
        <script src="Template_file/canyon/assets/js/main.js"></script>
        <!-- Script untuk auto show modal saat pertama kali load -->
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            var eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
            eventModal.show();
        });
        </script>
        <script>
        $(document).ready(function(){
            $(".alumni-carousel").owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            dots:true,
            autoplay:true,
            autoplayTimeout:4000,
            responsive:{
                0:{ items:1 },
                768:{ items:2 }
            }
            });
        });
        </script>

    </body>
    </section>
</main>
<?php include 'templates/footer.php'; ?>
