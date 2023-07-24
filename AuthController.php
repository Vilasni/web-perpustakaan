<?php

namespace App\Controllers;

class AuthController extends BaseController
{
  public function index()
  {
    return view('auth/login');
  }

  public function loginAuth()
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $pegawai = model(Pegawai::class);
    $check = $pegawai->where('username', $username)->first();

    if (!$check === []) {
      return redirect()->back();
    }

    if (password_verify($password, $check['password'])) {
      return redirect()->to('dashboard/home/');
    }

    return redirect()->back();
  }

  public function logoutAuth()
  {
    return redirect()->to('/');
  }
}
