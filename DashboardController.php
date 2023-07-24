<?php

namespace App\Controllers;

use App\Models\Buku;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;

class DashboardController extends BaseController
{
  public function index()
  {
    $peminjaman = model(Peminjaman::class);
    $buku = model(Buku::class);
    $mahasiswa = model(Mahasiswa::class);

    $peminjamanData = $peminjaman->countAllResults();
    $bukuData = $buku->countAllResults();
    $mahasiswaData = $mahasiswa->countAllResults();

    $peminjamanLimited = $peminjaman
      ->join('mahasiswa', 'mahasiswa.id = peminjaman.mahasiswa_id', 'inner')
      ->join('buku', 'buku.id = peminjaman.buku_id', 'inner')
      ->select('
        peminjaman.*, 
        mahasiswa.nama as mahasiswa, 
        mahasiswa.nim, 
        mahasiswa.kelas, 
        buku.judul as buku
      ')
      ->limit(5)
      ->findAll();

    return view('dashboard/home', [
      'peminjaman' => $peminjamanData,
      'buku' => $bukuData,
      'mahasiswa' => $mahasiswaData,
      'peminjamanLimited' => $peminjamanLimited
    ]);
  }
}
