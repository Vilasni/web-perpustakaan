<?= $this->extend('template/dashboard') ?>

<?= $this->section('content') ?>
<h1 class="text-2xl">Rangkuman</h1>
<div class="d-flex flex-row">
  <div class="card col-4">
    <div class="card-header">
      <div class="bg-primary px-4 py-3 rounded" style="width: fit-content;">
        <i class="fa fa-book fa-lg text-white" aria-hidden="true"></i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">Jumlah Peminjaman</p>
        <h4 class="my-2  text-lg"><?= $peminjaman ?> Kali</h4>
      </div>
    </div>
  </div>

  <div class="card col-4">
    <div class="card-header">
      <div class="bg-info px-4 py-3 rounded" style="width: fit-content;">
        <i class="fa fa-users fa-lg text-white" aria-hidden="true"></i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">Jumlah Mahasiswa</p>
        <h4 class="my-2 text-lg"><?= $mahasiswa ?> Mahasiswa</h4>
      </div>
    </div>
  </div>

  <div class="card col-4">
    <div class="card-header">
      <div class="bg-dark px-4 py-3 rounded" style="width: fit-content;">
        <i class="fa fa-book fa-lg text-white" aria-hidden="true"></i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">Jumlah Buku</p>
        <h4 class="my-2 text-lg"><?= $buku ?> Buah</h4>
      </div>
    </div>
  </div>
</div>

<h1 class="text-2xl mt-4">Peminjaman Terbaru</h1>
<div class="card p-2 w-100 shadow-lg">
  <div class="card-body">
    <div class="table-responsive w-100">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">No.</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">NIM</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Email</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Kelas</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Jenis Kelamin</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($peminjamanLimited) > 0) : ?>
            <?php foreach ($peminjamanLimited as $key => $item) : ?>
              <tr>
                <td>
                  <p class="text-sm"><?= $key + 1 ?>.</p>
                </td>
                <td>
                  <p class="text-sm text-bold"><?= $item['nim'] ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= $item['mahasiswa'] ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= $item['kelas'] ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= $item['buku'] ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= $item['tanggal_dipinjam'] ?></p>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>