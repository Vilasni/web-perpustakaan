<?= $this->extend('template/dashboard') ?>

<?= $this->section('content') ?>
<div class="card p-4">
  <div class="card-title">
    <h2 class="text-2xl">Tambah Peminjaman</h2>
  </div>
  <form action="/dashboard/peminjaman/update/<?= $peminjaman['id'] ?>" method="POST">
    <div class="d-flex flex-column gap-3">
      <div class="d-flex flex-row gap-3">
        <div class="input-group input-group-static">
          <label for="" class="ms-0">Nama Mahasiswa</label>
          <select class="form-control" name="mahasiswa_id">
            <option>Pilih Mahasiswa</option>
            <?php foreach ($mahasiswa as $item) : ?>
              <option <?= $peminjaman['mahasiswa_id'] === $item['id'] ? 'selected' : '' ?> value="<?= $item['id'] ?>"><?= $item['nama'] ?> - <?= $item['nim'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="input-group input-group-static">
          <label for="" class="ms-0">Buku</label>
          <select class="form-control" name="buku_id">
            <option>Pilih Buku</option>
            <?php foreach ($buku as $item) : ?>
              <option <?= $peminjaman['buku_id'] === $item['id'] ? 'selected' : '' ?> value="<?= $item['id'] ?>"><?= $item['judul'] ?> - <?= $item['pengarang'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="d-flex flex-column gap-3">
        <div class="input-group input-group-outline">
          <label class="form-label">Tanggal Dipinjam</label>
          <input type="date" class="form-control" name="tanggal_dipinjam" value="<?= $peminjaman['tanggal_dipinjam'] ?>">
        </div>
        <div class="input-group input-group-static">
          <label for="" class="ms-0">Status Peminjaman</label>
          <select class="form-control" name="status">
            <option>Pilih Status</option>
            <option <?= $peminjaman['status'] === 'Dipinjam' ? 'selected' : '' ?> value="Dipinjam">Dipinjam</option>
            <option <?= $peminjaman['status'] === 'Dikembalikan' ? 'selected' : '' ?> value="Dikembalikan">Dikembalikan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <textarea class="form-control border" name="keterangan" id="keterangan" rows="5"><?= $peminjaman['keterangan'] ?></textarea>
        </div>
      </div>
      <div class="d-flex flex-row gap-3">
        <a class="btn btn-danger btn-sm" href="/dashboard/master/buku" role="button">Kembali</a>
        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
      </div>
  </form>
</div>
<?= $this->endSection() ?>