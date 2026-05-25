<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KontakModel;

class Kontak extends BaseController
{
    protected $kontakModel;

    public function __construct()
    {
        $this->kontakModel = new KontakModel();
    }

    /**
     * Halaman kontak admin
     */
    public function index(): string
    {
        $data = [
            'title'  => 'Manajemen Kontak - Admin',
            'kontak' => $this->kontakModel->getAll(),
        ];
        return view('admin/kontak/index', $data);
    }

    /**
     * Ubah data kontak
     */
    public function ubah()
    {
        $id = $this->request->getPost('id');

        if ($this->request->getPost('value-nomor') !== null) {
            $field = 'nomor';
            $value = $this->request->getPost('value-nomor');
        } elseif ($this->request->getPost('value-sosmed') !== null) {
            $field = 'sosmed';
            $value = $this->request->getPost('value-sosmed');
        } elseif ($this->request->getPost('value-email') !== null) {
            $field = 'email';
            $value = $this->request->getPost('value-email');
        } else {
            return redirect()->back()->with('error', 'Data tidak valid!');
        }

        $this->kontakModel->ubah($id, $field, $value);

        return redirect()->to(base_url('admin/kontak'))->with('success', 'Kontak berhasil diubah!');
    }
}
