<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="">Indah Salon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="/#home" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="/#about" class="nav-link">Tentang</a></li>
        <li class="nav-item"><a href="/#services" class="nav-link">Layanan</a></li>
        <li class="nav-item"><a href="/#products" class="nav-link">Produk</a></li>
        <li class="nav-item"><a href="/#contact" class="nav-link">Kontak</a></li>
      </ul>

      @auth('pelanggan')
        <div class="dropdown ml-3">
          <a class="dropdown-toggle text-dark" style="font-size: 20px;" href="#" role="button"
            data-toggle="dropdown" aria-expanded="false">
            <i class="icon icon-user-circle-o"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout') }}"><i class="icon icon-sign-out"></i> Keluar</a>
          </div>
        </div>
      @else
        <a href="{{ route('login.index') }}" class="btn btn-primary" style="font-size: 14px">Masuk</a>
      @endauth
    </div>
  </div>
</nav>
