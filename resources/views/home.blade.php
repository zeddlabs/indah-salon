<!DOCTYPE html>
<html lang="en">

<head>
  <title>Indah Salon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('landing_page/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('landing_page/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/style.css') }}">
</head>

<body>

  <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('landing_page/images/bg_1.jpg') }});"
    data-stellar-background-ratio="0.5" id="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <div class="icon">
            <a href="index.html" class="logo">
              <span class="flaticon-flower"></span>
              <h1>Indah Salon</h1>
            </a>
          </div>
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Salon Kecantikan</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#layanan"
              class="btn btn-white btn-outline-white px-4 py-3">Telusuri Layanan Kami</a></p>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Indah Salon</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#home" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
          <li class="nav-item"><a href="#layanan" class="nav-link">Layanan</a></li>
          <li class="nav-item"><a href="#products" class="nav-link">Produk</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="ftco-section" id="about">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-about align-self-stretch"
            style="background-image: url({{ asset('landing_page/images/bg_3.jpg') }}); width: 100%;">
          </div>
        </div>
        <div class="col-md-6 pl-md-5 ftco-animate">
          <h2 class="mb-4">Selamat Datang di Indah Salon</h2>
          <p>Selamat datang di Indah Salon, destinasi utama Anda untuk perawatan kecantikan dan kesehatan yang sempurna.
            Di Indah Salon, kami percaya bahwa setiap individu berhak mendapatkan perawatan terbaik untuk menonjolkan
            kecantikan alami mereka. Dengan pengalaman bertahun-tahun dan profesional yang terlatih, kami siap
            memberikan layanan berkualitas tinggi yang dirancang khusus untuk memenuhi kebutuhan Anda.</p>
          <p>Indah Salon menggunakan produk-produk berkualitas tinggi yang aman dan efektif, memastikan bahwa setiap
            kunjungan memberikan hasil yang memuaskan. Percayakan perawatan kecantikan Anda kepada kami, dan biarkan
            Indah Salon membantu Anda merasa lebih cantik dan percaya diri setiap hari.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section" id="layanan">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Layanan Kami</h2>
          <p>Temukan layanan terbaik yang anda butuhkan disini.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section" id="products">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Produk Kami</h2>
          <p>Temukan produk terbaik yang anda butuhkan disini.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-appointment" id="contact">
    <div class="overlay"></div>
    <div class="container">
      <div class="row d-md-flex align-items-center">
        <div class="col-md-2"></div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="appointment-info text-center p-5">
            <div class="mb-4">
              <h3 class="mb-3">Alamat</h3>
              <p>Jl. Perhubungan No. 1C, Laut Dendang</p>
            </div>
            <div class="mb-4">
              <h3 class="mb-3">No. Telepon</h3>
              <p><strong>+62 812 3456 7890</strong></p>
            </div>
            <div>
              <h3 class="mb-3">Jadwal Buka</h3>
              <p class="day"><strong>Senin - Sabtu</strong></p>
              <span>08:00 - 17:00</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 appointment pl-md-5 ftco-animate">
          <h3 class="mb-3">Kirim Pesan</h3>
          <form action="#" class="appointment-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="No. Handphone">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Pesan"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim" class="btn btn-white btn-outline-white py-3 px-4">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Indah Salon</h2>
            <p>Percayakan perawatan kecantikan Anda kepada kami, dan biarkan
              Indah Salon membantu Anda merasa lebih cantik dan percaya diri setiap hari.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Perhubungan No. 1C, Laut
                    Dendang</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 812 3456
                      7890</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">faq@indahsalon.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This website is made with <i class="icon-heart"
              aria-hidden="true"></i> by <a href="">Indah Salon</a>

          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
        stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
        stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="{{ asset('landing_page/js/jquery.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/popper.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/aos.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('landing_page/js/google-map.js') }}"></script>
  <script src="{{ asset('landing_page/js/main.js') }}"></script>

</body>

</html>
