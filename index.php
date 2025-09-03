<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<main class="main-content">
    <section class="hero">
        <body>
         
       <!-- Start Navbar Area Start -->
        
       
        <!-- End Clgun Searchbar Area -->

        <!-- Start Clgun Banner 2 Area -->
        <div class="banner-area-2 big-bg-2">
            <div class="container">
                <div class="banner-content-2">
                    <div class="content">
                        <span data-aos="fade-zoom-in" data-aos-delay="300">Universitas Merdeka Malang</span>
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
        <!-- End Clgun Banner 2 Area -->

        <!-- Start About Us Area 2 -->
        <!-- Section About -->
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
        <!-- Button 3 -->
        <button class="default-btn" data-bs-toggle="modal" data-bs-target="#modalTujuan">🎯 Tujuan Fakultas</button>
        <!-- Button 4 -->
        <button class="default-btn" data-bs-toggle="modal" data-bs-target="#modalVisiMisi">🌟 Visi dan Misi</button>
      </div>
    </div>
  </div>
</section>
<!-- Modal: Sambutan Dekan -->
<div class="modal fade" id="modalSambutan" tabindex="-1" aria-labelledby="modalSambutanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-white bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSambutanLabel">Sambutan Dekan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row align-items-start">
          <!-- Foto Dekan -->
          <div class="col-md-4 mb-3">
            <img src="Template_file/canyon/assets/img/banner/Dekan.png" alt="Foto Dekan" class="img-fluid rounded shadow-sm" style="width: 100%; max-height: 300px; object-fit: cover;">
            <p class="mt-2 text-center fw-bold">Dr. Nawang Warsi Wulandari, S.Psi., M.Si., Psikolog</p>
            <p class="text-center fst-italic">Dekan Fakultas Psikologi</p>  
        </div>
          

          <!-- Teks Sambutan -->
          <div class="col-md-8">
            <p>
              Fakultas Psikologi berkomitmen untuk memberikan pendidikan yang berkualitas dan relevan dengan perkembangan ilmu pengetahuan serta kebutuhan masyarakat.
            </p>
            <p>
              Kami berusaha menciptakan lingkungan akademik yang kondusif, di mana mahasiswa dapat mengembangkan potensi intelektual, emosional, dan sosialnya secara seimbang.
            </p>
            <p>
              Dengan pendekatan berbasis penelitian dan praktik, kami berupaya untuk mencetak lulusan yang kompeten, berintegritas, serta mampu memberikan kontribusi positif bagi masyarakat dan dunia profesional.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal: Sejarah Kami -->
<div class="modal fade" id="modalSejarah" tabindex="-1" aria-labelledby="modalSejarahLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-white bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSejarahLabel">Sejarah Kami</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Fakultas Psikologi Universitas Merdeka Malang berdiri sejak 2 Agustus 2001. Merupakan salah satu Fakultas Psikologi yang memiliki komitmen tinggi untuk mencetak lulusan yang berkompeten pada bidang psikologi keluarga, berjiwa wirausaha dan memiliki daya saing baik nasional maupun internasional.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Tujuan Fakultas -->
<div class="modal fade" id="modalTujuan" tabindex="-1" aria-labelledby="modalTujuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-white bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTujuanLabel">Tujuan Fakultas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Meningkatkan kualitas penyelenggaraan program pendidikan S1 Psikologi untuk menghasilkan lulusan yang kompeten pada bidang Psikologi, berjiwa wirausaha dan berdaya saing internasional.</li>
          <li>Meningkatkan kuantitas dan kualitas penelitian dan pengabdian kepada masyarakat serta publikasi ilmiah.</li>
          <li>Menumbuhkan tata kelola kelembagaan menuju “Good University Governance” berbasis Sistem Informasi Manajemen sebagai DSS.</li>
          <li>Meningkatkan kerjasama dengan institusi dalam dan luar negeri dengan prinsip kesetaraan.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Visi dan Misi -->
<div class="modal fade" id="modalVisiMisi" tabindex="-1" aria-labelledby="modalVisiMisiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content text-white bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="modalVisiMisiLabel">Visi dan Misi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Visi Fakultas Psikologi</h4>
        <p>
          Menjadi Fakultas Psikologi terkemuka dalam pengembangan Sumber Daya Manusia seutuhnya yang berjiwa wirausaha pada skala nasional dan internasional.
        </p>

        <h4>Misi Fakultas Psikologi</h4>
        <ul>
          <li>Menyelenggarakan program pendidikan tinggi yang berkualitas pada jenis program pendidikan akademik.</li>
          <li>Menyelenggarakan penelitian dan pengabdian kepada masyarakat serta publikasi ilmiah dalam bidang Psikologi.</li>
          <li>Melaksanakan tata kelola Fakultas berbasis Sistem Informasi Manajemen sebagai DSS yang menganut prinsip “good university governance”.</li>
          <li>Menjalin kerjasama-kemitraan dengan institusi lain secara nasional maupun internasional.</li>
        </ul>
      </div>
    </div>
  </div>
</div>


                

            </div>
        </div>
        <!-- End About Us Area 2 -->

        
        <!-- Start Video Area -->
        <div class="video-area">
            <div class="video-thumbnail" id="video-thumbnail" data-video-id="8UfAJmyVYuY">
                <div class="play-icon">▶</div>
            </div>
        </div>
        <!-- End Video Area -->


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
<div class="success-area success-area-2 ptb-100">
    <div class="container">
        <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <p>Testimoni Alumni Psikologi Universitas Merdeka Malang</p>
            </div>
            <h2>Apa Kata Mereka ?? </h2>
        </div>

        <div class="row justify-content-center">
        <div class="row justify-content-center">

    <!-- Testimoni 1 - Alvin -->
    <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
        <div class="success-card" data-aos="fade-up" data-aos-delay="100">
            <div class="image text-center">
                <img src="Template_file/canyon/assets/img/Alvin.jpg" alt="Foto Alvin" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="content text-center mt-3">
                <h5 class="fw-bold">Alvin Andrean S., A.Md.Li., S.Psi., CRSS.</h5>
                <p class="mb-1"><strong>Profesi:</strong> Talent Acquisition & Employer Branding Specialist</p>
                <p class="mb-2"><strong>Tempat Kerja:</strong> PT Merdeka Tsingshan Indonesia</p>
            </div>
        </div>
    </div>

    <!-- Testimoni 2 - Mahasiswa Kedua -->
    <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
        <div class="success-card" data-aos="fade-up" data-aos-delay="200">
            <div class="image text-center">
                <img src="Template_file/canyon/assets/img/maria.jpg" alt="Foto Mahasiswa Kedua" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="content text-center mt-3">
                <h5 class="fw-bold">Maria Nikita, A. Md. Li., S. Psi</h5>
                <p class="mb-1"><strong>Profesi:</strong> People & Culture Specialist, APAC</p>
                <p class="mb-2"><strong>Tempat Kerja:</strong> Green Park Pte Ltd</p>
            </div>
        </div>
    </div>

    <!-- Testimoni 3 - Mahasiswa Ketiga -->
    <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
        <div class="success-card" data-aos="fade-up" data-aos-delay="300">
            <div class="image text-center">
                <img src="Template_file/canyon/assets/img/grace.jpg" alt="Foto Mahasiswa Ketiga" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="content text-center mt-3">
                <h5 class="fw-bold">Grace Latuheru, M.Psi., Psikolog</h5>
                <p class="mb-1"><strong>Profesi:</strong> Dosen dan praktik mandiri psikolog</p>
                <p class="mb-2"><strong>Tempat Kerja:</strong> Fakultas Kedokteran, Universitas Pattimura</p>
            </div>
        </div>
    </div>

</div>
    </div>
</div>
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

    </body>
    </section>
</main>
<?php include 'templates/footer.php'; ?>
