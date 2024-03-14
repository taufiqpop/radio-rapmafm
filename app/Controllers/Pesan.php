<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    protected $pesanModel;

    public function __construct()
    {
        $this->pesanModel    = new \App\Models\PesanModel();
    }

    // Pesan
    public function index()
    {
        $currentPage = $this->request->getVar('page_pesan') ? $this->request->getVar('page_pesan') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pesan = $this->pesanModel->search($keyword);
        } else {
            $pesan = $this->pesanModel;
        }

        $pesan->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Pesan',
            'pesan'       => $pesan->paginate(10, 'pesan'),
            'pager'       => $pesan->pager,
            'currentPage' => $currentPage,
        ];

        return view('user/pesan', $data);
    }
}
