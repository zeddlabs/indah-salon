<x-layouts.app title="{{ $title }}">
  <x-layouts.partials.navbar />
  <!-- END nav -->

  <section class="ftco-section" id="services">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Invoice Layanan</h2>
          <p>Jangan lupa untuk menyimpan invoice.</p>
        </div>
      </div>
      <div class="card">
        <h5 class="card-header">Invoice</h5>
        <div class="card-body">
          <p class="font-italic font-weight-bold">Pembayaran akan dilakukan di lokasi salon. Harap simpan invoice ini.
          </p>
          <div class="row">
            <div class="col-md-6">
              <p class="card-text">Nama Layanan</p>
              <p class="card-text">Nama Pelanggan</p>
              <p class="card-text">Tanggal Perawatan</p>
              <p class="card-text">Jam Perawatan</p>
              <p class="card-text">Catatan</p>
            </div>
            <div class="col-md-6">
              <p class="card-text">: {{ $perawatan->layanan->nama_layanan }}</p>
              <p class="card-text">: {{ $perawatan->pelanggan->nama }}</p>
              <p class="card-text">: {{ $perawatan->tanggal_perawatan }}</p>
              <p class="card-text">: {{ $perawatan->jam_perawatan }}</p>
              <p class="card-text">: {{ $perawatan->catatan ?? '-' }}</p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <p class="card-text">Durasi</p>
              <p class="card-text">Biaya</p>
            </div>
            <div class="col-md-6">
              <p class="card-text">: {{ $perawatan->layanan->durasi }} menit</p>
              <p class="card-text">: Rp {{ number_format($perawatan->biaya_perawatan, 2, ',', '.') }}</p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <p class="card-text">Tanggal Pesan</p>
            </div>
            <div class="col-md-6">
              <p class="card-text">: {{ $perawatan->created_at->format('Y-m-d') }}</p>
            </div>
          </div>

          {{-- Cetak Invoice --}}
          <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('layanan.invoice.print', $perawatan->invoice) }}" class="btn btn-primary">Cetak
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
