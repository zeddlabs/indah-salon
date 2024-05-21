<x-layouts.app title="Masuk">
  <section class="ftco-section bg-primary" style="min-height: 100vh;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Masuk</h5>
              <h6 class="card-subtitle mb-2 text-muted">Selamat Datang</h6>
              <hr>
              <form action="" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" style="height: 48px !important;" id="email"
                    name="email" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" style="height: 48px !important;" id="password"
                    name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-3">Masuk</button>
              </form>
              <hr>
              <p class="card-text">Belum memiliki akun? <a href="{{ route('register.index') }}"
                  style="text-decoration: underline">Daftar
                  Sekarang</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
