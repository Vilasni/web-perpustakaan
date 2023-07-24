<?= $this->extend('template/dashboard') ?>

<?= $this->section('content') ?>
<div class="card p-2 w-100 shadow-lg">
  <div class="card-body">
    <div class="card-title d-flex flex-row justify-content-between">
      <h4>Data Peminjaman</h4>
      <a class="btn btn-success btn-sm mx-2" href="/dashboard/peminjaman/create" role="button">Tambah Peminjaman Buku</a>
    </div>
    <hr class="border border-dark opacity-2">
    <div class="table-responsive w-100">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">No.</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Nama Peminjam</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Judul Buku</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Tanggal Dipinjam</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Tanggal Kembali</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Status</th>
            <th class="text-uppercase text-secondary text-sm font-weight-bolder">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($peminjaman) > 0) : ?>
            <?php foreach ($peminjaman as $key => $item) : ?>
              <tr>
                <td>
                  <p class="text-sm"><?= $key + 1 ?>.</p>
                </td>
                <td>
                  <p class="text-sm text-secondary text-bold"><?= $item['mahasiswa'] ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= $item['buku'] ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= date('d M Y', strtotime($item['tanggal_dipinjam'])) ?></p>
                </td>
                <td>
                  <p class="text-sm"><?= date('d M Y', strtotime($item['tanggal_dipinjam'] . ' + 5 days')) ?></p>
                </td>
                <td>
                  <?php if ($item['status'] === 'Dipinjam') : ?>
                    <span class="badge badge-pill mb-3 bg-gradient-primary">
                      <?= $item['status'] ?>
                    </span>
                  <?php else : ?>
                    <span class="badge badge-pill mb-3 bg-gradient-success">
                      <?= $item['status'] ?>
                    </span>
                  <?php endif; ?>
                </td>
                <td class="align-middle">
                  <a class="btn btn-info btn-sm" href="/dashboard/peminjaman/edit/<?= $item['id'] ?>" role="button">Edit</a>
                  <button class="btn btn-warning btn-sm" type="button" data-bs-target="#status-<?= $item['id'] ?>" data-bs-toggle="modal">Ubah Status</button>
                  <button class="btn btn-danger btn-sm" type="button" data-bs-target="#delete-<?= $item['id'] ?>" data-bs-toggle="modal">Hapus</button>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td colspan="7" class="text-center">Tidak ada data</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php foreach ($peminjaman as $item) : ?>
  <div class="modal fade" id="status-<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="/dashboard/peminjaman/ubah-status/<?= $item['id'] ?>" method="POST">
          <div class="modal-header">
            <h5 class="modal-title">Ubah Status</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apa anda yakin ingin mengubah status data peminjaman ini?
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-warning">Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php foreach ($peminjaman as $item) : ?>
  <div class="modal fade" id="delete-<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="/dashboard/peminjaman/delete/<?= $item['id'] ?>" method="POST">
          <div class="modal-header">
            <h5 class="modal-title">Hapus Data</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apa anda yakin ingin menghapus data ini?
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?= $this->endSection() ?>