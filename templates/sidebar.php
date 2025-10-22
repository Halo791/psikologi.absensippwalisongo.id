
<style>
    .navbar-area .navbar-brand img {
        max-width: 180px;  /* ukuran default */
        width: 100%;
        height: auto;
    }
    
    /* Saat sticky, biar lebih kecil */
    .navbar-area.sticky .navbar-brand img {
        max-width: 150px;
    }
    
    /* Navbar wrapper pakai flex rapi */
    .navbar-area .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    /* Menu tengah fleksibel */
    .navbar-area .navbar-nav {
        flex: 1;
        display: flex;
        justify-content: center; /* biar rata tengah */
        gap: 20px;
    }
    
    /* Tombol CTA "Hubungi Kami" */
    .navbar-area .default-btn {
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 25px;
        white-space: nowrap; /* biar teks tidak pecah */
    }
    
    /* Responsif saat layar kecil */
    @media (max-width: 991px) {
        .navbar-area .navbar-brand img {
            max-width: 140px;
        }
        .navbar-area .navbar-nav {
            display: none; /* diganti dengan offcanvas/menu mobile */
        }
    }
    
    </style>
<header class="main-header">
    <div class="navbar-area style-2" id="navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img class="logo-light" src="../Template_file/canyon/assets/img/logo/LOGO-PSI.png" alt="logo">
                    <img class="logo-dark" src="../Template_file/canyon/assets/img/logo/LOGO-PSI.png" alt="logo">
                </a>
                <div class="other-option d-lg-none">
                    <div class="option-item">
                        <button type="button" class="search-btn" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </div>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                    <i class='bx bx-menu'></i>
                </a>
                <div class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Akademik
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="program_studi.php" class="nav-link">Program Akademik</a></li>
                                <li class="nav-item"><a href="kemahasiswaan.php" class="nav-link">Kemahasiswaan</a></li>
                                <li class="nav-item"><a href="jadwal_kuliah.php" class="nav-link">Jadwal Kuliah</a></li>
                                <li class="nav-item"><a href="surat_mahasiswa.php" class="nav-link">Surat Mahasiswa </a></li>
                                <li class="nav-item"><a href="dosen.php" class="nav-link">Dosen Kami </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="laboratorium.php" class="nav-link">
                                Laboratorium
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Layanan
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="lpt.php" class="nav-link">LPT</a></li>
                                <li class="nav-item"><a href="paud.php" class="nav-link">PAUD "Ananda"</a></li>
                                <li class="nav-item"><a href="https://jurnal.unmer.ac.id/index.php/jpt" class="nav-link">JPT</a></li>
                                <li class="nav-item"><a href="financial-aid.html" class="nav-link">Pusat Studi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="berita_agenda.php" class="nav-link">
                                Berita & Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://unmer.ac.id/" class="nav-link">
                                Tentang Unmer
                            </a>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="nav-btn">
                            <a href="tel:0341568395" class="default-btn">
                            Hubungi Kami
                            </a>
                            </div>                            
                        </div>
                        <div class="option-item">
                            <div class="nav-search">
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" class="search-button"><i class='bx bx-search'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
       </div>
       <!-- End Navbar Area Start -->

       <!-- Start Responsive Navbar Area -->
       <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-8">
                        <a href="index.php" class="logo d-inline-block">
                            <img class="logo-light img-fluid" src="../Template_file/canyon/assets/img/logo/LOGO-PSI.png" alt="logo" style="max-height: 40px;">
                        </a>
                    </div>
                    <div class="col-4 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
           <div class="offcanvas-body">
               <div class="accordion" id="navbarAccordion">
                   <!-- Beranda -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="index.php">
                           Beranda
                       </a>
                   </div>
       
                   <!-- Akademik -->
                   <div class="accordion-item">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAkademik" aria-expanded="false">
                           Akademik
                       </button>
                       <div id="collapseAkademik" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                           <div class="accordion-body">
                               <div class="accordion">
                                   <div class="accordion-item">
                                       <a href="program_studi.php" class="accordion-link">Program Akademik</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="kemahasiswaan.php" class="accordion-link">Kemahasiswaan</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="jadwal_kuliah.php" class="accordion-link">Jadwal Kuliah</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="surat_mahasiswa.php" class="accordion-link">Surat Mahasiswa</a>
                                   </div>
                                   <div class="accordion-item">
                                    <a href="dosen.php" class="accordion-link">Dosen Kami</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
       
                   <!-- Laboratorium -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="laboratorium.php">
                           Laboratorium
                       </a>
                   </div>
       
                   <!-- Layanan -->
                   <div class="accordion-item">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLayanan" aria-expanded="false">
                           Layanan
                       </button>
                       <div id="collapseLayanan" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                           <div class="accordion-body">
                               <div class="accordion">
                                   <div class="accordion-item">
                                       <a href="lpt.php" class="accordion-link">LPT</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="paud.php" class="accordion-link">PAUD "Ananda"</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="https://jurnal.unmer.ac.id/index.php/jpt" class="accordion-link">JPT</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="financial-aid.html" class="accordion-link">Pusat Studi</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
       
                   <!-- Berita & Agenda -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="berita_agenda.php">
                           Berita & Agenda
                       </a>
                   </div>
       
                   <!-- Tentang Unmer -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="https://unmer.ac.id/">
                           Tentang Unmer
                       </a>
                   </div>
       
                   <!-- Hubungi Kami -->
                   <div class="offcanvas-other-options">
                    <div class="option-item">
                    <a href="tel:0341568395" class="default-btn">
                    Hubungi Kami
                    </a>
                    </div>
                </div> 
               </div>
       
               <!-- Contact Info -->
               <div class="offcanvas-contact-info">
                   <h4>Contact Info</h4>
                   <ul class="contact-info list-style">
                       <li>
                           <i class="bx bxs-envelope"></i>
                           <a href="mailto:psikologi@unmer.ac.id">psikologi@unmer.ac.id</a>
                       </li>
                       <li>
                           <i class="bx bxs-time"></i>
                           <p>Senin - Jumat: 09:00 - 18:00</p>
                       </li>
                   </ul>
                   <ul class="social-profile list-style">
                       <li><a href="https://www.facebook.com/p/psiunmermlg-100081348555586/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                       <li><a href="https://www.instagram.com/psikologi.unmer/?hl=en#:~:text=Psikologi%20Unmer%20Malang%20(%40psikologi.,%E2%80%A2%20Instagram%20photos%20and%20videos" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                       <li><a href="https://www.youtube.com/@psikologi.unmermlg/" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                   </ul>
               </div>
       
               <!-- CTA Button -->
               <div class="offcanvas-other-options">
                <div class="option-item">
                <a href="tel:0341568395" class="default-btn">
                Hubungi Kami
                </a>
                </div>
            </div>            
           </div>
       </div>
       <!-- End Responsive Navbar Area -->
       

        <!-- Start Clgun Searchbar Area -->
        <div class="clgun offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop">
            <div class="offcanvas-header">
                <a href="index.php" class="logo">
                    <img src="Template_file/canyon/assets/img/logo/LOGO-PSI.png" alt="image">
                </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="search-box">
                    <div class="searchwrapper"> 
                        <div class="searchbox"> 
                            <div class="row align-items-center"> 
                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Fiend Your Course Here!"></div> 
                                <div class="col-lg-3"> 
                                    <a class="btn" href="#">Search</a> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="offcanvas-contact-info">
                    <h4>Contact Info</h4>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="bx bxs-time"></i>
                        </li>
                        <li><i class="bx bxs-phone-call"></i> Telpon Kami - <a href="tel:+62341568395">(0341) 568395</a></li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="mailto:psikologi@unmer.ac.id">psikologi@unmer.ac.id</a>
                        </li>
                        <li>
                            <i class="bx bxs-map"></i>
                            <p>Jl. Terusan Dieng No.62-64, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146</p>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.facebook.com/p/psiunmermlg-100081348555586/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                       <li><a href="https://www.instagram.com/psikologi.unmer/?hl=en#:~:text=Psikologi%20Unmer%20Malang%20(%40psikologi.,%E2%80%A2%20Instagram%20photos%20and%20videos" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                       <li><a href="https://www.youtube.com/@psikologi.unmermlg/" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
</header>
