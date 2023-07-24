<?php

namespace App\Controllers;

use App\Models\Mahasiswa;
use App\Models\Buku;
use App\Models\Peminjaman;

class PeminjamanController extends BaseController
{
  public function index()
  {
    $peminjaman = model(Peminjaman::class);
    $peminjamanData = $peminjaman
      ->join('mahasiswa', 'mahasiswa.id = peminjaman.mahasiswa_id', 'inner')
      ->join('buku', 'buku.id = peminjaman.buku_id', 'inner')
      ->select('
        peminjaman.*, 
        mahasiswa.nama as mahasiswa, 
        mahasiswa.nim, 
        mahasiswa.kelas, 
        buku.judul as buku
      ')
      ->findAll();

    return view('dashboard/main/peminjaman/index', [
      'peminjaman' => $peminjamanData,
    ]);
  }

  public function create()
  {
    $mahasiswa = model(Mahasiswa::class);
    $buku = model(Buku::class);
    $mahasiswaData = $mahasiswa->findAll();
    $bukuData = $buku->findAll();

    return view('dashboard/main/peminjaman/create', [
      'mahasiswa' => $mahasiswaData,
      'buku' => $bukuData
    ]);
  }

  public function insert()
  {
    $peminjaman = model(Peminjaman::class);
    $peminjamanBaru = [
      'mahasiswa_id' => $this->request->getPost('mahasiswa_id'),
      'buku_id' => $this->request->getPost('buku_id'),
      'status' => $this->request->getPost('status'),
      'keterangan' => $this->request->getPost('keterangan'),
      'tanggal_dipinjam' => $this->request->getPost('tanggal_dipinjam'),
    ];

    $peminjaman->insert($peminjamanBaru);
    return redirect()->to('/dashboard/peminjaman');
  }

  public function edit($id)
  {
    $peminjaman = model(Peminjaman::class);
    $mahasiswa = model(Mahasiswa::class);
    $buku = model(Buku::class);

    $mahasiswaData = $mahasiswa->findAll();
    $bukuData = $buku->findAll();
    $peminjamanData = $peminjaman->find($id);

    return view('dashboard/main/peminjaman/edit', [
      'peminjaman' => $peminjamanData,
      'buku' => $bukuData,
      'mahasiswa' => $mahasiswaData
    ]);
  }

  public function update($id)
  {
    $peminjaman = model(Peminjaman::class);
    $peminjamanBaru = [
      'mahasiswa_id' => $this->request->getPost('mahasiswa_id'),
      'buku_id' => $this->request->getPost('buku_id'),
      'status' => $this->request->getPost('status'),
      'keterangan' => $this->request->getPost('keterangan'),
      'tanggal_dipinjam' => $this->request->getPost('tanggal_dipinjam'),
    ];

    $peminjaman->update($id, $peminjamanBaru);
    return redirect()->to('/dashboard/peminjaman');
  }

  public function ubahStatus($id)
  {
    $peminjaman = model(Peminjaman::class);
    $peminjamanDetail = $peminjaman->find($id);

    $peminjamanBaru = [
      'status' => $peminjamanDetail['status'] === 'Dipinjam' ? 'Dikembalikan' : 'Dipinjam',
    ];

    $peminjaman->update($id, $peminjamanBaru);
    return redirect()->to('/dashboard/peminjaman');
  }

  public function delete($id)
  {
    $peminjaman = model(Peminjaman::class);
    $peminjaman->delete($id);
    return redirect()->to('/dashboard/peminjaman');
  }
}
