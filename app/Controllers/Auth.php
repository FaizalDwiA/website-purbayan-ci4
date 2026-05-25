<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session   = session();
    }

    /**
     * Tampilkan halaman login
     */
    public function index(): string
    {
        // Jika sudah login, redirect ke admin
        if ($this->session->get('login')) {
            return redirect()->to(base_url('admin'));
        }
        return view('auth/login', ['title' => 'Login - Admin Proklim Purbayan']);
    }

    /**
     * Proses login
     */
    public function proses()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->findByUsername($username);

        if ($user) {
            if (password_verify($password, $user['user_password'])) {
                // Set session
                $this->session->set([
                    'login'    => true,
                    'user'     => $user['username'],
                    'user_id'  => $user['user_id'],
                ]);
                return redirect()->to(base_url('admin'))->with('success', 'Selamat datang, ' . $user['username'] . '!');
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }
    }

    /**
     * Logout
     */
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('login'))->with('success', 'Berhasil logout.');
    }
}
