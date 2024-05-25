<x-layouts.app title="{{ $title }}">
  <x-layouts.partials.navbar />
  <!-- END nav -->

  <section class="ftco-section" id="services">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Invoice Produk</h2>
          <p>Jangan lupa untuk menyimpan invoice.</p>
        </div>
      </div>
      <div class="card">
        <h5 class="card-header">Invoice</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <p class="card-text">Invoice</p>
              <p class="card-text">Nama Pelanggan</p>
              <p class="card-text">Tanggal Pesanan</p>
              <p class="card-text">Produk</p>
              <p class="card-text">Harga Produk</p>
              <p class="card-text">Jumlah Produk</p>
              <p class="card-text">Alamat</p>
              <p class="card-text">Metode Pembayaran</p>
              <p class="card-text">Status Pembayaran</p>
              <p class="card-text">Status Pesanan</p>
              <p class="card-text">Biaya</p>
            </div>
            <div class="col-md-6">
              <p class="card-text">: {{ $penjualan->invoice }}</p>
              <p class="card-text">: {{ $penjualan->pelanggan->nama }}</p>
              <p class="card-text">: {{ $penjualan->tanggal_pesanan }}</p>
              <p class="card-text">: {{ $penjualan->produk->nama_produk }}</p>
              <p class="card-text">: Rp {{ number_format($penjualan->produk->harga, 2, ',', '.') }}</p>
              <p class="card-text">: {{ $penjualan->jumlah_produk }}</p>
              <p class="card-text">: {{ $penjualan->pelanggan->alamat }}</p>
              <p class="card-text">: {{ $penjualan->metode_pembayaran->nama_metode }}</p>
              <p class="card-text">: {{ $penjualan->status_pembayaran }}</p>
              <p class="card-text">: {{ $penjualan->status_pesanan }}</p>
              <p class="card-text">: <b>Rp {{ number_format($penjualan->total_biaya, 2, ',', '.') }}</b></p>
            </div>
          </div>

          <hr>

          <p class="card-text"><b>Pembayaran :</b></p>
          @if ($penjualan->metode_pembayaran->jenis_metode == 'Transfer')
            <div class="row">
              <div class="col-md-6">
                <p class="card-text">Bank</p>
                <p class="card-text">No. Rekening</p>
                <p class="card-text">Atas Nama</p>
              </div>
              <div class="col-md-6">
                <p class="card-text">: {{ $penjualan->metode_pembayaran->rekening->nama_bank }}</p>
                <p class="card-text">: {{ $penjualan->metode_pembayaran->rekening->no_rekening }}</p>
                <p class="card-text">: {{ $penjualan->metode_pembayaran->rekening->atas_nama }}</p>
              </div>
            </div>

            <hr>

            <p class="card-text">Silahkan lakukan pembayaran ke rekening di atas. Setelah melakukan pembayaran, silahkan
              upload bukti pembayaran di bawah ini.</p>

            <form action="{{ route('produk.invoice.upload', $penjualan->invoice) }}" method="post"
              enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                <input type="file" class="form-control @error('bukti_pembayaran') is-invalid @enderror"
                  id="bukti_pembayaran" name="bukti_pembayaran" required>
                @error('bukti_pembayaran')
                  <small class="invalid-feedback">{{ $message }}</small>
                @enderror
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Upload Bukti Pembayaran</button>
              </div>
            </form>
          @else
            <p class="card-text">Bayar Di Tempat</p>
          @endif

          <hr>

          @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif

          {{-- Cetak Invoice --}}
          <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('produk.invoice.print', $penjualan->invoice) }}" class="btn btn-primary">Cetak
              Invoice</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-layouts.partials.footer />

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const navItems = document.querySelectorAll('.nav-item');

      navItems.forEach(navItem => {
        navItem.addEventListener('click', function() {
          navItems.forEach(navItem => {
            navItem.classList.remove('active');
          });

          navItem.classList.add('active');
        });
      });
    });
  </script>
</x-layouts.app>
