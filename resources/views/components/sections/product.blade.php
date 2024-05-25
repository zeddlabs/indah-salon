<section class="ftco-section" id="products">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Produk Kami</h2>
        <p>Temukan produk terbaik yang anda butuhkan disini.</p>
      </div>
    </div>
    <div class="row">
      @foreach ($products as $product)
        <div class="col-md-4 mb-3 ftco-animate">
          <div class="card">
            <img src="{{ Storage::url($product->foto) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $product->nama_produk }}</h5>
              <p class="card-text">{{ $product->deskripsi }}</p>
              <p class="card-text" style="font-weight: bold; font-size: 18px;">Rp
                {{ number_format($product->harga, 2, ',', '.') }}</p>
              <a href="{{ route('produk.create', $product->id) }}"
                class="btn btn-primary {{ !auth('pelanggan')->check() || $product->stok == 0 ? 'disabled' : '' }}">Beli
                Sekarang</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
