
<header class="main-header">
    <div class="navbar-area style-2" id="navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
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
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Laboratorium
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Layanan
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="admission.html" class="nav-link">LPT</a></li>
                                <li class="nav-item"><a href="how-to-apply.html" class="nav-link">PAUD "Ananda"</a></li>
                                <li class="nav-item"><a href="tuition-fees.html" class="nav-link">JPT</a></li>
                                <li class="nav-item"><a href="financial-aid.html" class="nav-link">Pusat Studi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Berita & Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Tentang Unmer
                            </a>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="nav-btn">
                                <a href="contact-us.html" class="default-btn">Hubungi Kami</a>
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
               <a href="index.html" class="logo d-inline-block">
                   <img class="logo-light" src="../Template_file/canyon/assets/img/logo/LOGO-PSI.png" alt="logo">
               </a>
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
                               </div>
                           </div>
                       </div>
                   </div>
       
                   <!-- Laboratorium -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="laboratorium.html">
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
                                       <a href="admission.html" class="accordion-link">LPT</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="how-to-apply.html" class="accordion-link">PAUD "Ananda"</a>
                                   </div>
                                   <div class="accordion-item">
                                       <a href="tuition-fees.html" class="accordion-link">JPT</a>
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
                       <a class="accordion-link without-icon" href="berita-agenda.html">
                           Berita & Agenda
                       </a>
                   </div>
       
                   <!-- Tentang Unmer -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="tentang-unmer.html">
                           Tentang Unmer
                       </a>
                   </div>
       
                   <!-- Hubungi Kami -->
                   <div class="accordion-item">
                       <a class="accordion-link without-icon" href="contact-us.html">
                           Hubungi Kami
                       </a>
                   </div>
               </div>
       
               <!-- Contact Info -->
               <div class="offcanvas-contact-info">
                   <h4>Contact Info</h4>
                   <ul class="contact-info list-style">
                       <li>
                           <i class="bx bxs-envelope"></i>
                           <a href="mailto:contact@Clgunme.edu">contact@Clgunme.edu</a>
                       </li>
                       <li>
                           <i class="bx bxs-time"></i>
                           <p>Senin - Jumat: 09:00 - 18:00</p>
                       </li>
                   </ul>
                   <ul class="social-profile list-style">
                       <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                       <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                       <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                   </ul>
               </div>
       
               <!-- CTA Button -->
               <div class="offcanvas-other-options">
                   <div class="option-item">
                       <a href="contact-us.html" class="default-btn">Hubungi Kami</a>
                   </div>
               </div>
           </div>
       </div>
       <!-- End Responsive Navbar Area -->
       

        <!-- Start Clgun Searchbar Area -->
        <div class="clgun offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop">
            <div class="offcanvas-header">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo/logo.png" alt="image">
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
                            <p>Mon - Fri: 9:00 - 18:00</p>
                        </li>
                        <li><i class="bx bxs-phone-call"></i> General Inquiries - <a href="tel:+8495160885">(849) 516-0885</a></li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="contact@Clgunme.edu">contact@Clgunme.edu</a>
                        </li>
                        <li>
                            <i class="bx bxs-map"></i>
                            <p>404 Camino Del Rio S, Suite 102San Diego, CA 92108</p>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.dribbble.com" target="_blank"><i class='bx bxl-dribbble'></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
</header>
