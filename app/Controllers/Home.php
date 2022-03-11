<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $userModel;
    private $session;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // return view('pages/dashboard');
        return view('landing_page');
        // return view('login');
        // return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('pages/dashboard');
    }

    public function insert_user()
    {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // enkripsi password
        $pass_ens = password_hash($password, PASSWORD_DEFAULT);

        $data = ([
            'username' => $username,
            'email' => $email,
            'password' => $pass_ens
        ]);

        $tambah = $this->userModel->insert($data);

        // jika data berhasil ditambah
        if ($tambah) {
            return view('/login');
        } else {
            return view('/register');
        }
    }

    public function auth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cekData = $this->userModel->where('email', $email)->first();

        // jika data berhasil ditambah
        if ($cekData) {
            return redirect()->to(base_url('dokumen/index'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
