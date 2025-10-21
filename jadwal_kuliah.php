<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

<style>
    .folder-section {
    background: #fcead0;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }
  .folder-title {
    font-weight: bold;
    color: #333;
  }
  .folder-subtitle {
    color: #555;
  }
  .file-list iframe {
    width: 100%;
    height: 300px;
    border: none;
    border-radius: 10px;
  }
  .file-preview {
    display: none;
    margin-top: 20px;
    border: 2px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
  }
  .file-preview iframe {
    width: 100%;
    height: 90vh;
    border: none;
  }
  .file-item {
    display: block;
    background: #fff;
    border-radius: 8px;
    padding: 10px 15px;
    margin-bottom: 8px;
    cursor: pointer;
    text-align: left;
    color: #333;
    transition: 0.3s;
    border: 1px solid #eee;
  }
  .file-item:hover {
    background: #ffe7c2;
  }
</style>

<div class="section-banner bg-16">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Jadwal Kuliah</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Informasi jadwal kuliah semester akan diperbarui secara berkala.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="academics-section ptb-100">
    <div class="container">
        <div class="row">


            <div class="col-lg-4 mb-4">
                <div class="academics-left">
                    <div class="ac-category">
                        <ul>
                            <li><a href="program_studi.php">Program Akademik</a></li>
                            <li><a href="kemahasiswaan.php">Kemahasiswaan</a></li>
                            <li><a class="active" href="jadwal_kuliah.php">Jadwal Kuliah</a></li>
                            <li><a href="surat_mahasiswa.php">Persuratan Mahasiswa</a></li>
                            <li><a href="dosen.php">Dosen Kami</a></li>
                        </ul>
                    </div>
                    <div class="default-btn mt-3">
                        <a href="contact-us.html">Hubungi Bu Usla</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mx-auto text-center">
            <div class="folder-section">
                <h3 class="folder-title">Semester Genap 2025/2026</h3>
                <h4 class="fw-bold mb-3">📂 Jadwal Kuliah</h4>

                <!-- Folder List (Google Drive Embedded View) -->
                <div class="file-list mb-3 shadow-sm">
                <iframe 
                    src="https://drive.google.com/embeddedfolderview?id=1kybu0nvba14UlTfUNOnhIXwTwdk-MjsZ#list" 
                    allowfullscreen>
                </iframe>
                </div>

                <p class="folder-subtitle">Klik salah satu file di atas untuk melihat pratinjau langsung.</p>

                <!-- File Preview Area -->
                <div id="filePreview" class="file-preview">
                <iframe id="previewFrame" allowfullscreen></iframe>
                </div>
            </div>
            </div>


        </div>
    </div>
</div>

<div class="go-top active">
    <i class="bx bx-up-arrow-alt"></i>
</div>

<?php include 'templates/footer.php'; ?>
<script>
  // Tangkap klik link di dalam iframe daftar file
  document.addEventListener("DOMContentLoaded", function() {
    const folderFrame = document.querySelector(".file-list iframe");
    const previewBox = document.getElementById("filePreview");
    const previewFrame = document.getElementById("previewFrame");

    // Deteksi klik di iframe daftar file
    folderFrame.addEventListener("load", function() {
      const innerDoc = folderFrame.contentDocument || folderFrame.contentWindow.document;
      const links = innerDoc.querySelectorAll('a');
      
      links.forEach(link => {
        link.addEventListener('click', e => {
          e.preventDefault();
          const href = link.getAttribute('href');
          
          // Ambil ID file dari URL
          const match = href.match(/[-\w]{25,}/);
          if (match) {
            const fileId = match[0];
            const previewUrl = `https://docs.google.com/gview?embedded=true&url=https://drive.google.com/uc?export=download&id=${fileId}`;
            
            previewFrame.src = previewUrl;
            previewBox.style.display = 'block';
            window.scrollTo({ top: previewBox.offsetTop - 50, behavior: 'smooth' });
          }
        });
      });
    });
  });
</script>