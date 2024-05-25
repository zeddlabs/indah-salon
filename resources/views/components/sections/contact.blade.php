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
        <form action="{{ route('message') }}" class="appointment-form" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama" name="nama_pelanggan" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="No. Handphone" name="no_telp" required>
          </div>
          <div class="form-group">
            <textarea name="pesan" id="" cols="30" rows="3" class="form-control" placeholder="Pesan" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Kirim" class="btn btn-white btn-outline-white py-3 px-4">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
