<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Nama Title Website-->
    <title>FLAB.ID Website--</title>

    <!--Bootstrap5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>   
     <script src="https://kit.fontawesome.com/711efb876c.js" crossorigin="anonymous"></script>

    <!--Link To Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="tambahan.css">
    <link rel="stylesheet" href="kontak.css">

     <!-- Place favicon.ico in the root directory -->
     <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        .nav-item.active .nav-link {
        color: #ffbb00 !important;
      }

      @media (max-width: 1200px) {
    /* Mengurangi ukuran font pada menu utama */
    .navbar-nav .nav-link {
        font-size: 17px;
    }}

    @media (max-width: 600px){
    .navbar-brand .fw-bold {
    font-size: 26px !important;
    }
    .navbar-brand span {
        font-size: 26px !important;
    }
    }

    @media (max-width: 470px){
        .nav-btns .btn i {
    font-size: 14px !important;
  }
  .navbar-brand {
    margin-right: 5px;
    margin-left: -30px;
  }
    }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-4 fixed-top" style="background-color: rgb(0, 0, 0);">
        <div class = "container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">                
                <span class="fw-bold ms-5" style="color: white; font-family:'poppins', sans-serif; font-size: 40px;">Flab.<span style="color: #fb0; font-family:'poppins', sans-serif; font-size: 40px;">id</span></span>
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn" style="color: white;" onclick="redirectToInstagram()">        
                    <i class="fab fa-instagram" style="font-size: 27px;"></i>
                </button>
                <button type="button" class="btn" style="color: white;" onclick="redirectToWhatsApp()">
                    <i class="fab fa-whatsapp" style="font-size: 27px;"></i>
                </button>
                <button type="button" class="btn" style="color: white;" onclick="redirectToMap()">
                    <i class="fas fa-map-marked-alt" style="font-size: 27px;"></i>
                </button>
            </div>            

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" style="color: rgb(255, 221, 0);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30">
                    <path stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22" />
                  </svg>
              </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu" >
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2" >
                        <a class = "nav-link" href = "index.html" style="color: white;">Home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link" href = "produk.html" style="color: white;">Produk</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link" href = "tentangkami.html" style="color: white;">Tentang Kami</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link" href = "kontak.php"style="color: white;">Kontak</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link" href = "shopnow.html"style="color: white;">Shop Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

   <Main>
   
   <!-- contact area start -->
   <section class="contact__area pt-105 pb-145">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-wrapper mb-55">
                  <h2 class="page__title-2"><b>Hubungi<span style="color: rgb(255, 187, 0);"> Kami</span></b></h2>
                  <p></p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-7 col-xl-7">
               <div class="contact__wrapper  white-bg">
                  <div class="contact__form">
                     <form action="proses_form.php" method="POST">
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Nama Lengkap</h5>
                                 <div class="contact__input">
                                    <input type="text" name="nama_lengkap" placeholder="Nama lengkap anda" required>
                                    <i class="fal fa-user"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Email</h5>
                                 <div class="contact__input">
                                    <input type="text" name="email" placeholder="Email" required>
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Nomor Telepon</h5>
                                 <div class="contact__input">
                                    <input type="text" name="nomor_telepon" placeholder="Nomor telepon" required>
                                    <i class="fal fa-phone-alt"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Subjek</h5>
                                 <div class="contact__input">
                                    <input type="text" name="subjek" placeholder="Judul pesan" required>
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xxl-12">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Message</h5>
                                 <div class="contact__input textarea">
                                    <textarea name="pesan" placeholder="Masukkan pesan anda" required></textarea>
                                    <i class="fal fa-comment"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xxl-12">
                              <center><input class="btn btn-warning" type="submit" value="Submit"></center>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            
            <div class="col-xxl-5 col-xl-5">
               <div class="contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7926.9753265758645!2d106.72279801458842!3d-6.586141399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4cf81421f4b%3A0xfc1a3cac574fe110!2sPerumahan%20IPB%20Alam%20Sinarsari!5e0!3m2!1sen!2sid!4v1684940312297!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="contact__info pt-20 pb-120">
    <div class="contact__info-shape">
       <img src="assets/img/icon/contact/contact-bg.png" alt="">
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="page__title-wrapper text-center mb-55">
                <h2 class="page__title-2"><b>More <span style="color: rgb(255, 187, 0);">Info</span></b></h2>
                <p>Hubungi Kami Untuk Info Lebih Lanjut</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
             <div class="contact__item text-center white-bg mb-30 transition-3">
                <div class="contact__icon mb-30 d-flex justify-content-center align-items-center">
                   <img src="assets/img/icon/contact/office.png" alt="">
                </div>
                <div class="contact__content">
                  <br>
                   <h4 class="contact__content-title"><b>Alamat</b></h4>
                   <h4 class="contact__content-title">Alam Sinarsari B-65, Bogor</h4>
                </div>
             </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
             <div class="contact__item text-center white-bg mb-30 transition-3">
                <div class="contact__icon mb-30 d-flex justify-content-center align-items-center">
                   <img src="assets/img/icon/contact/mail.png" alt="">
                </div>
                <div class="contact__content">
                  <br>
                  <h4 class="contact__content-title"><b>Email</b></a> </h4>
                   <h4 class="contact__content-title">flab.id@gmail.com</a></h4>
                   
                </div>
             </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
             <div class="contact__item text-center white-bg mb-30 transition-3">
                <div class="contact__icon mb-30 d-flex justify-content-center align-items-center">
                   <img src="assets/img/icon/contact/phone.png" alt="">
                </div>
                <div class="contact__content">
                  <br>
                   <h4 class="contact__content-title"><b>Whatsapp</b></a> </h4>
                   <h4 class="contact__content-title">+62 813 8508 919</a> </h4>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

    </main>
   
     <!-- footer -->
     <footer class = "bg-dark py-5">
      <div class = "container">
          <div class = "row text-white g-4">
              <div class = "col-md-6 col-lg-3">
                  <h5 class = "text-uppercase text-decoration-none brand text-white" href = "index.html"><b>Flab.<span style="color: rgb(255, 187, 0);">id</span></b></h5>
                  <p class = "text-white text-muted mt-3">Flab.id adalah penyedia produk perasa berkualitas tinggi yang kami produksi sendiri. Kami siap untuk mewadahi semua kebutuhan rasa bisnis mu!</p>
              </div>

              <div class = "col-md-6 col-lg-3">
                  <h5 class = "text-uppercase text-decoration-none brand text-white"><b>Daftar <span style="color: rgb(255, 187, 0);">Menu</span></b></h5>
                  <ul class = "list-unstyled">
                      <li class = "my-3">
                          <a href = "index.html" class = "text-white text-decoration-none text-muted">
                              <i class = "fas fa-chevron-right me-1"></i> Home
                          </a>
                      </li>
                      <li class = "my-3">
                          <a href = "produk.html" class = "text-white text-decoration-none text-muted">
                              <i class = "fas fa-chevron-right me-1"></i> Produk
                          </a>
                      </li>
                      <li class = "my-3">
                          <a href = "tentangkami.html" class = "text-white text-decoration-none text-muted">
                              <i class = "fas fa-chevron-right me-1"></i> Tentang Kami
                          </a>
                      </li>
                      <li class = "my-3">
                          <a href = "kontak.html" class = "text-white text-decoration-none text-muted">
                              <i class = "fas fa-chevron-right me-1"></i> Kontak
                          </a>
                      </li>
                  </ul>
              </div>

              <div class = "col-md-6 col-lg-3">
                <h5 class = "text-uppercase text-decoration-none brand text-white"><b>Kunjungi <span style="color: rgb(255, 187, 0);">Kami</span></b></h5>
                <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                      <span class = "me-3">
                          <i class = "fas fa-map-marked-alt"></i>
                      </span>
                      <span class = "fw-light">
                          B65, Alam Sinar Sari
                      </span>
                  </div>
                  <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                      <span class = "me-3">
                          <i class = "fas fa-envelope"></i>
                      </span>
                      <span class = "fw-light">
                          Flab.id@gmail.com
                      </span>
                  </div>
                  <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                      <span class = "me-3">
                          <i class = "fas fa-phone-alt"></i>
                      </span>
                      <span class = "fw-light">
                          +62 813 8508 919
                      </span>
                  </div>
              </div>

              <div class = "col-md-6 col-lg-3">
                <h5 class = "text-uppercase text-decoration-none brand text-white"><b>Media <span style="color: rgb(255, 187, 0);">Sosial</span></b></h5>
                <div>
                      <ul class = "list-unstyled d-flex">
                          <li>
                              <a href = "https://www.instagram.com/flab.id/" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                  <i class = "fab fa-instagram"></i>
                                  
                              </a>
                          </li>
                          <li>
                              <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                  <i class = "fab fa-facebook-f"></i>
                                  
                              </a>
                          </li>
                          <li>
                              <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                  <i class = "fab fa-twitter"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- end of footer -->
  <script>
  // Mendapatkan path halaman saat ini
  var path = window.location.pathname;

  // Mendapatkan nama file dari path halaman saat ini
  var currentPage = path.split('/').pop();

  // Menghapus ekstensi file jika ada (contoh: .html)
  currentPage = currentPage.replace(/\.[^/.]+$/, "");

  // Mengambil semua elemen li dengan class "nav-item"
  var navItems = document.getElementsByClassName("nav-item");

  // Menandai nav item yang sesuai dengan halaman yang aktif
  for (var i = 0; i < navItems.length; i++) {
      var navLink = navItems[i].querySelector(".nav-link");

      if (navLink.getAttribute("href").includes(currentPage)) {
          navItems[i].classList.add("active");
      }
  }
</script>
  <script>
    function redirectToInstagram() {
        window.location.href ="https://www.instagram.com/flab.id/"; //Instagram Flab ID
    }

    function redirectToWhatsApp() {
        window.location.href = "https://api.whatsapp.com/send/?phone=8138508919&text&type=phone_number&app_absent=0"; //Whatsapp Flab ID
    }

    function redirectToMap() {
        window.location.href = "https://www.google.com/maps/place/Jl.+Alam+Sinar+Sari+Raya,+Sinar+Sari,+Kec.+Dramaga,+Kabupaten+Bogor,+Jawa+Barat+16680/@-6.5835964,106.730895,18.56z/data=!4m6!3m5!1s0x2e69c4d1b42f77cf:0xf18fd7cb6c59f645!8m2!3d-6.5831761!4d106.73176!16s%2Fg%2F1hm3h_z_z?authuser=0&entry=ttu"; //Ruko FLAB ID
    }
  </script>

  <script>
    feather.replace()
  </script>

 

</body>
</html>
