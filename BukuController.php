<?php

namespace App\Controllers;

use App\Models\Buku;

class BukuController extends BaseController
{
  public function index()
  {
    $buku = model(Buku::class);

    $bukuData = $buku->findAll();

    return view('dashboard/master/buku/index', [
      'buku' => $bukuData
    ]);
  }

  public function create()
  {
    return view('dashboard/master/buku/create');
  }

  public function insert()
  {
    $buku = model(Buku::class);
    $bukuBaru = [
      'kode_buku' => $this->request->getPost('kode_buku'),
      'judul' => $this->request->getPost('judul'),
      'pengarang' => $this->request->getPost('pengarang'),
      'tahun_terbit' => $this->request->getPost('tahun_terbit'),
      'penerbit' => $this->request->getPost('penerbit'),
    ];

    $buku->insert($bukuBaru);
    return redirect()->to('dashboard/master/buku');
  }

  public function edit($id)
  {
    $buku = model(Buku::class);
    $bukuDetail = $buku->find($id);
    return view('dashboard/master/buku/edit', [
      'buku' => $bukuDetail
    ]);
  }

  public function update($id)
  {
    $buku = model(Buku::class);
    $bukuBaru = [
      'kode_buku' => $this->request->getPost('kode_buku'),
      'judul' => $this->request->getPost('judul'),
      'pengarang' => $this->request->getPost('pengarang'),
      'tahun_terbit' => $this->request->getPost('tahun_terbit'),
      'penerbit' => $this->request->getPost('penerbit'),
    ];

    $buku->update($id, $bukuBaru);
    return redirect()->to('/dashboard/master/buku');
  }

  public function delete($id)
  {
    $buku = model(Buku::class);
    $buku->delete($id);
    return redirect()->to('/dashboard/master/buku');
  }
}
