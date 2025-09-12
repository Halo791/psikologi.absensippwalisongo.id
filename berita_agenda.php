<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<!-- Start Section Banner Area -->
<div class="section-banner bg-16">
  <div class="container">
    <div class="banner-spacing">
      <div class="section-info">
        <h2 data-aos="fade-up" data-aos-delay="100">Berita & Agenda</h2>
        <p data-aos="fade-up" data-aos-delay="200">
          Informasi terbaru, kegiatan penting, dan agenda resmi Fakultas.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- End Section Banner Area -->

<div class="laboratory-content-section ptb-100">
  <div class="container">

    <!-- Video Utama -->
    <div class="mb-5">
      <h3 class="mb-4 text-center">Video Kegiatan Fakultas</h3>
      <div class="ratio ratio-16x9 mb-4">
        <iframe src="https://www.youtube.com/embed/gSnx6ywPl-E"
                title="YouTube video"
                allowfullscreen></iframe>
      </div>
    </div>

    <!-- Carousel Berita -->
    <div class="mb-5">
      <h3 class="mb-4 text-center">Berita Terbaru</h3>
      <div class="owl-carousel owl-theme">
        <?php
          // ambil berita terbaru dari tabel events kategori recent
          $q_recent = $conn->query("SELECT * FROM events WHERE category='recent' ORDER BY event_date DESC LIMIT 10");
          if ($q_recent && $q_recent->num_rows > 0):
            while ($row = $q_recent->fetch_assoc()):
        ?>
        <div class="item">
          <div class="card shadow-sm">
            <img src="uploads/<?= $row['image'] ?>" class="card-img-top" alt="<?= $row['title'] ?>">
            <div class="card-body">
              <div class="tag"><?= $row['tag'] ?></div>
              <h5 class="card-title">
                <a href="<?= $row['link'] ?>"><?= $row['title'] ?></a>
              </h5>
              <span><?= date("F d, Y", strtotime($row['event_date'])) ?></span>
              <p class="card-text"><?= $row['description'] ?></p>
              <a href="<?= $row['link'] ?>" class="btn btn-primary btn-sm rounded-pill px-3">
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>
        <?php
            endwhile;
          else:
            echo '<p class="text-center">Belum ada berita tersedia.</p>';
          endif;
        ?>
      </div>
    </div>

    <!-- Agenda Section -->
    <div id="agenda" class="mt-5">
      <h3 class="mb-4 text-center">Agenda Mendatang</h3>
      <?php
        $q_upcoming = $conn->query("SELECT * FROM events WHERE category='upcoming' ORDER BY event_date ASC LIMIT 5");
        if ($q_upcoming && $q_upcoming->num_rows > 0):
          echo '<div class="list-group">';
          while ($row = $q_upcoming->fetch_assoc()):
            $tanggal = date("d M Y", strtotime($row['event_date']));
      ?>
        <a href="<?= $row['link'] ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          <?= $row['title'] ?>
          <span class="badge bg-primary rounded-pill"><?= $tanggal ?></span>
        </a>
      <?php
          endwhile;
          echo '</div>';
        else:
          echo '<p class="text-center">Belum ada agenda tersedia.</p>';
        endif;
      ?>
    </div>

  </div>
</div>

<div class="go-top active">
  <i class="bx bx-up-arrow-alt"></i>
</div>

<!-- JS Files -->
<script src="Template_file/canyon/assets/js/jquery.min.js"></script>
<script src="Template_file/canyon/assets/js/aos.js"></script>
<script src="Template_file/canyon/assets/js/bootstrap.min.js"></script>
<script src="Template_file/canyon/assets/js/magnific-popup.min.js"></script>
<script src="Template_file/canyon/assets/js/owl.carousel.min.js"></script>
<script src="Template_file/canyon/assets/js/main.js"></script>

<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 3,
      margin: 20,
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive:{
        0:{ items:1 },
        768:{ items:2 },
        992:{ items:3 }
      }
    });
  });
</script>

</body>
</section>
</main>
<?php include 'templates/footer.php'; ?>
