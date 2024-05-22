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
              <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 d-flex">
                  <img src="{{ asset('images/avatar.png') }}" class="img-thumbnail text-center mr-3"
                    style="width: 100px" id="photoPreview" alt="">
                  <div class="">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                      style="height: 48px !important; font-size: 14px;" id="foto" name="foto">
                    @error('foto')
                      <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror"
                    style="height: 48px !important; font-size: 14px;" id="nama" name="nama" required
                    placeholder="Nama..." value="{{ old('nama') }}">
                  @error('nama')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                    placeholder="Alamat..." style="font-size: 14px">{{ old('alamat') }}</textarea>
                  @error('alamat')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="no_telp" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                    style="height: 48px !important; font-size: 14px;" id="no_telp" name="no_telp" required
                    placeholder="0812xxxxxxxx" value="{{ old('no_telp') }}">
                  @error('no_telp')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    style="height: 48px !important; font-size: 14px;" id="tanggal_lahir" name="tanggal_lahir" required
                    value="{{ old('tanggal_lahir') }}">
                  @error('tanggal_lahir')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="jenis_kelamin"
                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                    style="height: 48px !important; font-size: 14px;">
                    <option value="Laki-laki" {{ old('jenis_kelamin') === 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="Perempuan" {{ old('jenis_kelamin') === 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                  </select>
                  @error('jenis_kelamin')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror"
                    style="height: 48px !important; font-size: 14px;" id="email" name="email" required
                    placeholder="Email..." value="{{ old('email') }}">
                  @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"
                    style="height: 48px !important; font-size: 14px;" id="password" name="password" required>
                  @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
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

  <script>
    document.getElementById('foto').addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function() {
          document.getElementById('photoPreview').setAttribute('src', reader.result);
        }
        reader.readAsDataURL(file);
      }
    });
  </script>
</x-layouts.app>
