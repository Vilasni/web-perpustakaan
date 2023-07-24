<?php

namespace App\Controllers;

use App\Models\Pegawai;

class PegawaiController extends BaseController
{
  public function index()
  {
    $pegawai = model(Pegawai::class);
    $pegawaiData = $pegawai->findAll();

    return view('dashboard/master/pegawai/index', [
      'pegawai' => $pegawaiData
    ]);
  }

  public function create()
  {
    return view('dashboard/master/pegawai/create');
  }

  public function insert()
  {
    $pegawai = model(Pegawai::class);
    $password = $this->request->getPost('password');

    $pegawaiBaru = [
      'fullname' => $this->request->getPost('nama'),
      'username' => $this->request->getPost('username'),
      'password' => password_hash($password, PASSWORD_DEFAULT),
    ];

    $pegawai->insert($pegawaiBaru);

    return redirect()->to('/dashboard/master/pegawai');
  }

  public function edit($id)
  {
    $pegawai = model(Pegawai::class);
    $pegawaiData = $pegawai->find($id);

    return view('dashboard/master/pegawai/edit', [
      'pegawai' => $pegawaiData,
    ]);
  }

  public function update($id)
  {
    $pegawai = model(Pegawai::class);

    $pegawaiBaru = [
      'fullname' => $this->request->getPost('fullname'),
      'username' => $this->request->getPost('username'),
    ];

    $pegawai->update($id, $pegawaiBaru);

    return redirect()->to('/dashboard/master/pegawai');
  }

  public function delete($id)
  {
    $pegawai = model(Pegawai::class);
    $pegawai->delete($id);

    return redirect()->to('/dashboard/master/pegawai');
  }
}
