<?= $this->extend('template/base') ?>

<?= $this->section('body') ?>
<div class="bg-primary vh-100 d-flex flex-column gap-3 py-5 px-4">
  <div class="d-flex flex-row align-items-center justify-content-center mt-5 gap-3">
    <div class="flex flex-column col-6">
      <h2 class="text-white fs-2 font-weight-bold text-uppercase">Sistem Peminjaman Buku</h2>
    </div>
    <div class="card flex flex-column col-4 rounded-2">
      <form action="/login" method="post">
        <div class="card-body">
          <h5 class="card-title">Login</h5>
          <span>Masukkan username dan juga password anda.</span>
          <div class="col-12 mt-5">
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary btn-sm w-100 mt-3" href="#" role="submit">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>