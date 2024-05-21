<x-layouts.app title="Daftar">
  <section class="ftco-section bg-primary" style="min-height: 100vh;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar</h5>
              <h6 class="card-subtitle mb-2 text-muted">Selamat Datang</h6>
              <hr>
              <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" class="form-control" style="height: 48px !important; font-size: 14px;"
                    id="foto" name="foto">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                    id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                  <label for="no_telp" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" style="height: 48px !important; font-size: 14px;"
                    id="no_telp" name="no_telp" required>
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" style="height: 48px !important; font-size: 14px;"
                    id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="mb-3">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                    style="height: 48px !important; font-size: 14px;">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" style="height: 48px !important; font-size: 14px;"
                    id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" style="height: 48px !important; font-size: 14px;"
                    id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-3">Daftar</button>
              </form>
              <hr>
              <p class="card-text">Sudah memiliki akun? <a href="{{ route('login.index') }}"
                  style="text-decoration: underline">Masuk</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
