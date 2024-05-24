<section class="ftco-section" id="services">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Layanan Kami</h2>
        <p>Temukan layanan terbaik yang anda butuhkan disini.</p>
      </div>
    </div>
    <div class="row">
      @foreach ($services as $service)
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="{{ Storage::url($service->foto) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $service->nama_layanan }}</h5>
              <p class="card-text">{{ $service->deskripsi }}</p>
              <p class="card-text">Durasi : {{ $service->durasi }} menit</p>
              <p class="card-text" style="font-weight: bold; font-size: 18px;">Rp
                {{ number_format($service->harga, 2, ',', '.') }}</p>
              <a href="{{ route('layanan.create', $service->id) }}"
                class="btn btn-primary {{ !auth('pelanggan')->check() ? 'disabled' : '' }}">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
