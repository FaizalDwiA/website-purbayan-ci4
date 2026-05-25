<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BeritaModel;
use App\Models\GambarModel;
use App\Models\PrestasiModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $beritaModel   = new BeritaModel();
        $gambarModel   = new GambarModel();
        $prestasiModel = new PrestasiModel();

        $data = [
            'title'    => 'Dashboard - Admin Proklim Purbayan',
            'berita'   => $beritaModel->getAll(),
            'gambar'   => $gambarModel->getAll(),
            'prestasi' => $prestasiModel->getAll(),
        ];
        return view('admin/dashboard', $data);
    }
}
