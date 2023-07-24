<?= $this->extend('template/base') ?>

<?= $this->section('body') ?>
<div class="d-flex flex-row vh-100">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-gray-800" style="width: 280px;">
    <a href="#" class="mb-3 text-decoration-none text-center text-white fw-bold fs-6 text-uppercase">
      Perpustakaan Online
    </a>
    <hr class="border bordeer-white mx-2">
    <ul class="nav flex-column mb-auto">
      <li class="p-2 nav-item">
        <a href="/dashboard/home" class="nav-link fw-lighter text-white d-flex flex-row gap-2 align-items-center text-sm">
          <i class="fa fa-home" aria-hidden="true"></i>
          Dashboard
        </a>
      </li>
      <li class="p-2 nav-item">
        <a href="/dashboard/peminjaman" class="nav-link fw-lighter text-white d-flex flex-row gap-2 align-items-center text-sm">
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          Peminjaman
        </a>
      </li>
      <h5 class="fs-6 mt-2 mx-4 text-uppercase text-white text-sm">masters</h5>
      <li class="p-2 nav-item">
        <a href="/dashboard/master/pegawai" class="fs-6 nav-link fw-lighter text-white d-flex flex-row gap-2 align-items-center text-sm">
          <i class="fa fa-user" aria-hidden="true"></i>
          Pegawai
        </a>
      </li>
      <li class="p-2 nav-item">
        <a href="/dashboard/master/mahasiswa" class="nav-link fw-lighter text-white d-flex flex-row gap-2 align-items-center text-sm">
          <i class="fa fa-home"></i>
          Mahasiswa
        </a>
      </li>
      <li class="p-2 nav-item">
        <a href="/dashboard/master/buku" class="nav-link fw-lighter text-white d-flex flex-row gap-2 align-items-center text-sm">
          <i class="fa fa-book" aria-hidden="true"></i>
          Buku
        </a>
      </li>
      <li class="p-2 nav-item">
        <a href="/logout" class="nav-link fw-lighter text-white d-flex flex-row gap-2 align-items-center text-sm">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          Logout
        </a>
      </li>
    </ul>
  </div>
  <div class="px-4 py-5 w-100 overflow-hidden">
    <?= $this->renderSection('content') ?>
  </div>
</div>
<?= $this->endSection() ?>