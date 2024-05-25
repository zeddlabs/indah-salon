<x-layouts.app title="{{ $title }}">
  <x-layouts.partials.navbar />
  <!-- END nav -->

  <section class="ftco-section" id="products">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Produk Kami</h2>
          <p>Temukan produk terbaik yang anda butuhkan disini.</p>
        </div>
      </div>
      <div class="card">
        <h5 class="card-header">Beli Produk</h5>
        <div class="card-body">
          <form action="{{ route('produk.order', $product->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama_produk" class="form-label">Produk</label>
              <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                id="nama_produk" name="nama_produk" required value="{{ $product->nama_produk }}" readonly>
            </div>
            <div class="form-group">
              <label for="harga_produk" class="form-label">Harga Produk</label>
              <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                id="harga_produk" name="harga_produk" required value="{{ $product->harga }}" readonly>
            </div>
            <div class="form-group">
              <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                id="nama_pelanggan" name="nama_pelanggan" required value="{{ auth('pelanggan')->user()->nama }}"
                readonly>
            </div>
            <div class="form-group">
              <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
              <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                id="alamat_pelanggan" name="alamat_pelanggan" required value="{{ auth('pelanggan')->user()->alamat }}"
                readonly>
            </div>
            <div class="form-group">
              <label for="tanggal_pesanan" class="form-label">Tanggal Pesanan</label>
              <input type="date" class="form-control @error('tanggal_pesanan') is-invalid @enderror"
                style="height: 48px !important; font-size: 14px;" id="tanggal_pesanan" name="tanggal_pesanan" required
                value="{{ old('tanggal_pesanan', date('Y-m-d')) }}">
              @error('tanggal_pesanan')
                <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
              <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror"
                style="height: 48px !important; font-size: 14px;" id="jumlah_produk" name="jumlah_produk" required
                value="{{ old('jumlah_produk') }}" min="1">
              @error('jumlah_produk')
                <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="id_metode_pembayaran" class="form-label">Metode Pembayaran</label>
              <select name="id_metode_pembayaran" id="id_metode_pembayaran"
                class="form-control @error('id_metode_pembayaran') is-invalid @enderror"
                style="height: 48px !important; font-size: 14px;" required>
                <option value="" disabled selected>Pilih Metode Pembayaran</option>
                @foreach ($metodePembayaran as $metode)
                  <option value="{{ $metode->id }}"
                    {{ old('id_metode_pembayaran') == $metode->id ? 'selected' : '' }}>{{ $metode->nama_metode }}
                  </option>
                @endforeach
              </select>
              @error('id_metode_pembayaran')
                <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="d-flex justify-content-end">
              <p class="card-text">Biaya : <span class="h4" id="total_biaya">Rp 0,00</span></p>
            </div>
            <button type="submit" class="btn btn-primary">Beli Sekarang</button>
          </form>
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

      const hargaProduk = document.getElementById('harga_produk');
      const jumlahProduk = document.getElementById('jumlah_produk');

      jumlahProduk.addEventListener('input', function() {
        const totalBiaya = parseInt(hargaProduk.value) * parseInt(jumlahProduk.value);
        document.getElementById('total_biaya').textContent = `Rp ${totalBiaya.toLocaleString('id-ID')}`;
      });
    });
  </script>
</x-layouts.app>
