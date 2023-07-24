<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
  public function index()
  {
    $mahasiswa = model(Mahasiswa::class);
    $mahasiswaData = $mahasiswa->findAll();

    return view('dashboard/master/mahasiswa/index', [
      'mahasiswa' => $mahasiswaData
    ]);
  }

  public function create()
  {
    return view('dashboard/master/mahasiswa/create');
  }

  public function insert()
  {
    $mahasiswa = model(Mahasiswa::class);
    $mahasiswaBaru = [
      'nim' => $this->request->getPost('nim'),
      'nama' => $this->request->getPost('nama'),
      'alamat' => $this->request->getPost('alamat'),
      'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
      'kelas' => $this->request->getPost('kelas'),
    ];

    $mahasiswa->insert($mahasiswaBaru);

    return redirect()->to('/dashboard/master/mahasiswa');
  }

  public function edit($id)
  {
    $mahasiswa = model(Mahasiswa::class);
    $mahasiswaBaru = [
      'nim' => $this->request->getPost('nim'),
      'nama' => $this->request->getPost('nama'),
      'alamat' => $this->request->getPost('alamat'),
      'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
      'kelas' => $this->request->getPost('kelas'),
    ];

    $mahasiswaDetail = $mahasiswa->find($id, $mahasiswaBaru);

    return view('dashboard/master/mahasiswa/edit', [
      'mahasiswa' => $mahasiswaDetail,
    ]);
  }

  public function update($id)
  {
    $mahasiswa = model(Mahasiswa::class);
    $mahasiswaBaru = [
      'nim' => $this->request->getPost('nim'),
      'nama' => $this->request->getPost('nama'),
      'alamat' => $this->request->getPost('alamat'),
      'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
      'kelas' => $this->request->getPost('kelas'),
    ];

    $mahasiswa->update($id, $mahasiswaBaru);

    return redirect()->to('/dashboard/master/mahasiswa');
  }

  public function delete($id)
  {
    $mahasiswa = model(Mahasiswa::class);
    $mahasiswa->delete($id);
    return redirect()->to('/dashboard/master/mahasiswa');
  }
}
