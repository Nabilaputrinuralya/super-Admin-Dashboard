<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/images/Website_Logo/Website_Logo_3.png') }}">
    <title>ProKing Indonesia</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav" class="scroll-to-section">
            <!-- ***** Logo Start ***** -->
            <a href="#homepage" class="logo">
              @foreach ($dataNavbar as $item)
              <img class="table-active" src="{{asset('navbarimg/'.$item->websitelogo)}}" width="300px" alt="" srcset="">
              @endforeach
              {{-- <img src="{{ asset('assets/images/Website_Logo/Website_Logo_1.png') }}" alt="Logo ProKing Indonesia"> --}}
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#homepage" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#aboutuspage">About Us</a></li>
              <li class="scroll-to-section"><a href="#projectspage">Projects</a></li>
              <li class="scroll-to-section"><a href="#contactuspage">Contact Us</a></li>
            </ul>
            <a href="/login-page" class="action_btn">LOGIN</a>      
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <!-- ***** Home Page Start ***** -->
  <div class="main-banner" id="homepage" data-wow-duration="1s" data-wow-delay="0.5s">
    <section class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="right-image show-up header-text" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="row">
                    <div class="col-lg-12">
                      <img src="{{ asset('assets/images/Website_Images/Website_Image_1.png') }}" alt="Ilustration ProKing Indonesia">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="left-content show-up header-text" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="col-lg-12">
                    <h2><center>Welcome to</center></h2>
                    <img src="{{ asset('assets/images/Website_Logo/Website_Logo_2.png') }}" alt="Logo ProKing Indonesia">
                    <p>ProKing (Project Taking) merupakan sebuah website yang dibuat khusus untuk mengelola beberapa proyek yang telah dibuat. Dengan ProKing, Anda akan lebih mudah dalam menampilkan serta mengelola proyek.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- ***** Home Page End ***** -->


  <!-- ***** About Us Page Start ***** -->
  <div id="aboutuspage" class="about-us section">
    <section class="page-section">
      <div class="container">
        <div class="section-heading">
          <h1 class="text-center">About Us</h1>
          <p>Kami merupakan siswi SMK Negeri 1 Cimahi, jurusan Sistem Informatika Jaringan dan Aplikasi (SIJA) yang sedang melaksanakan Praktik Kerja Lapangan (PKL) di PT. Eltran Indonesia. Kegiatan PKL ini dilaksanakan selama 6 bulan pada bulan Juli-Desember 2023.</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="{{ asset('assets/images/Profile_Pictures/Profile_Picture_1.jpg') }}" alt="..." />
              <h4>Fuji Anggraeni</h4>
              <p class="text-muted">Back-End Developer</p>
              <ul>
                <li><a href="https://www.instagram.com/fujianggr_/" target="_blank"><i class="fab fa-instagram"></i><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/fuji-anggraeni-29371825b/" target="_blank"><i class="fab fa-linkedin-in"></i><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="{{ asset('assets/images/Profile_Pictures/Profile_Picture_2.jpg') }}" alt="..." />
              <h4>Nabila Putri Nur Alya</h4>
              <p class="text-muted">Back-End Developer</p>
              <ul>
                <li><a href="https://www.instagram.com/nabilaptrnaa_/" target="_blank"><i class="fab fa-instagram"></i><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/nabila-putri-nur-alya-475a10283/" target="_blank"><i class="fab fa-linkedin-in"></i><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="{{ asset('assets/images/Profile_Pictures/Profile_Picture_3.jpg') }}" alt="..." />
              <h4>Pera Rahmawati</h4>
              <p class="text-muted">Front-End Developer</p>
              <ul>
                <li><a href="https://www.instagram.com/pera.rhmwt/" target="_blank"><i class="fab fa-instagram"></i><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/pera-rahmawati/" target="_blank"><i class="fab fa-linkedin-in"></i><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- ***** About Us Page Start ***** -->


  <!-- ***** Projects Us Page Start ***** -->
  <div id="projectspage" class="projects section">
    <section class="page-section">
      <div class="container">
        <div class="section-heading">
          <h1 class="text-center">Our Projects</h1>
        </div>
      </div>
      <div class="container swiper">
        <div class="slide-container">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <img src="#" class="w-100 rounded">
              <div class="card-body">
                <h4 class="card-title"><a href="#">Project Name 1</a></h4>
                <a href="#" class="action_btn">VISIT</a>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="card swiper-slide">
              <img src="{{ asset('assets/images/Project_Images/Project_Image_2.jpg') }}" class="card-img-top" alt="Project Image 1">
              <div class="card-body">
                <h4 class="card-title"><a href="#">Project Name 2</a></h4>
                <a href="#" class="action_btn">VISIT</a>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="card swiper-slide">
              <img src="{{ asset('assets/images/Project_Images/Project_Image_3.jpg') }}" class="card-img-top" alt="Project Image 1">
              <div class="card-body">
                <h4 class="card-title"><a href="#">Project Name 3</a></h4>
                <a href="#" class="action_btn">VISIT</a>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="card swiper-slide">
              <img src="{{ asset('assets/images/Project_Images/Project_Image_4.jpg') }}" class="card-img-top" alt="Project Image 1">
              <div class="card-body">
                <h4 class="card-title"><a href="#">Project Name 4</a></h4>
                <a href="#" class="action_btn">VISIT</a>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="card swiper-slide">
              <img src="{{ asset('assets/images/Project_Images/Project_Image_5.jpg') }}" class="card-img-top" alt="Project Image 1">
              <div class="card-body">
                <h4 class="card-title"><a href="#">Project Name 5</a></h4>
                <a href="#" class="action_btn">VISIT</a>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="card swiper-slide">
              <img src="{{ asset('assets/images/Project_Images/Project_Image_6.jpg') }}" class="card-img-top" alt="Project Image 1">
              <div class="card-body">
                <h4 class="card-title"><a href="#">Project Name 6</a></h4>
                <a href="#" class="action_btn">VISIT</a>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
      </div>
      <div class="swiper-pagination"></div>
    </section>
  </div>
  <!-- ***** Projects Us Page End ***** -->


  <!-- ***** Contact Us Page Start ***** -->
  <div id="contactuspage" class="contact-us section">
    <section class="page-section">
      <div class="container">
        <div class="section-heading">
          <h1 class="text-center">Contact Us</h1>
        </div>
        <div class="form">
          <div class="card contact-info">
            <h3 class="title">Let’s talk with us!</h3>
            <p class="text">We take pride in our friendly customer care! Reach out and we’ll help you however we can.</p>
            <div class="operating-hour">
              <p class="text bold">Operating Hour</p>
            </div>
            
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="card">
            <h3 class="title">Can't wait? Send a message!</h3>
            <form action="#" autocomplete="off">
              <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for="">Full Name</label>
                <span>Full Name</span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>

              <div class="select-menu">
                <div class="select-btn">
                    <span class="sBtn-text">Subject</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
                <ul class="options">
                    <li class="option">
                        <span class="option-text">Feedback</span>
                    </li>
                    <li class="option">
                        <span class="option-text">Website Issue(s)</span>
                    </li>
                    <li class="option">
                        <span class="option-text">General Question(s)</span>
                    </li>
                </ul>
            </div>
            
              <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input type="submit" value="SEND" class="action_btn" />
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- ***** Contact Us Page End ***** -->


  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="footer-widget" class="scroll-to-section">
            <a href="#homepage" class="logo">
              <img src="{{ asset('assets/images/Website_Logo/Website_Logo_1.png') }}" alt="Logo ProKing Indonesia">
            </a> 
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <p><a href="https://maps.app.goo.gl/aKoLwx18gXz1qGrW6">Soekarno Hatta No.501, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265</a></p>
          </div>
        </div>
        <div class="col-lg-4">
        </div>  
        <div class="col-lg-3">
          <div class="footer-widget">
            <ul>
              <li><a href="/copyright-page">Copyright</a></li>
              <li><a href="/privacypolicy-page">Privacy Policy</a></li>
              <li><a href="/termsofuse-page">Terms Of Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p class="scroll-to-section">Copyright © 2023 <a href="#homepage">ProKing Indonesia</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ***** Footer End***** -->


  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/animation.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/js/popup.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/swipercard.js') }}"></script>
  <script src="{{ asset('assets/js/contact-us.js') }}"></script>
  <script src="{{ asset('assets/js/contact-form.js') }}"></script>
</body>
</html>