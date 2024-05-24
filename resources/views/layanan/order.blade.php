<x-layouts.app title="{{ $title }}">
  <x-layouts.partials.navbar />
  <!-- END nav -->

  <section class="ftco-section" id="services">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Layanan Kami</h2>
          <p>Temukan layanan terbaik yang anda butuhkan disini.</p>
        </div>
      </div>
      <div class="card">
        <h5 class="card-header">Pesan Layanan</h5>
        <div class="card-body">
          <form action="{{ route('layanan.order', $service->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama_layanan" class="form-label">Nama Layanan</label>
              <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                id="nama_layanan" name="nama_layanan" required value="{{ $service->nama_layanan }}" readonly>
            </div>
            <div class="form-group">
              <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                id="nama_pelanggan" name="nama_pelanggan" required value="{{ auth('pelanggan')->user()->nama }}"
                readonly>
            </div>
            <div class="form-group">
              <label for="tanggal_perawatan" class="form-label">Tanggal Perawatan</label>
              <input type="date" class="form-control @error('tanggal_perawatan') is-invalid @enderror"
                style="height: 48px !important; font-size: 14px;" id="tanggal_perawatan" name="tanggal_perawatan"
                required value="{{ old('tanggal_perawatan') }}">
              @error('tanggal_perawatan')
                <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="jam_perawatan" class="form-label">Jam Perawatan</label>
              <input type="time" class="form-control @error('jam_perawatan') is-invalid @enderror"
                style="height: 48px !important; font-size: 14px;" id="jam_perawatan" name="jam_perawatan" required
                value="{{ old('jam_perawatan') }}">
              @error('jam_perawatan')
                <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="catatan" class="form-label">Catatan</label>
              <textarea name="catatan" id="catatan" class="form-control @error('catatan') is-invalid @enderror"
                placeholder="Catatan jika ada..." style="font-size: 14px" rows="3">{{ old('catatan') }}</textarea>
              @error('catatan')
                <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="d-flex justify-content-end">
              <p class="card-text">Biaya : <span class="h4">Rp
                  {{ number_format($service->harga, 2, ',', '.') }}</span></p>
            </div>
            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
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
    });
  </script>
</x-layouts.app>
