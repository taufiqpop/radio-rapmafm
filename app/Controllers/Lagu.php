<?php

namespace App\Controllers;

class Lagu extends BaseController
{
    protected $laguModel;

    public function __construct()
    {
        $this->laguModel = new \App\Models\LaguModel();
    }

    // List Lagu
    public function index()
    {
        $currentPage = $this->request->getVar('page_lagu') ? $this->request->getVar('page_lagu') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $lagu = $this->laguModel->search($keyword);
        } else {
            $lagu = $this->laguModel;
        }

        $lagu->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Bank Lagu',
            'lagu'        => $lagu->paginate(10, 'lagu'),
            'pager'       => $lagu->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/kepenyiaran/lagu/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Lagu',
        ];

        return view('control/kepenyiaran/lagu/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'judul'     => $this->request->getPost('judul'),
            'artist'    => $this->request->getPost('artist'),
            'album'     => $this->request->getPost('album'),
            'genre'     => $this->request->getPost('genre'),
            'tipe'      => $this->request->getPost('tipe'),
            'lokasi'    => $this->request->getPost('lokasi'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->laguModel->insert($data);
        session()->setFlashdata('pesan', 'Data Lagu Berhasil Ditambahkan!');

        return redirect('control/lagu');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'  => 'Rapma FM | Edit Data Lagu',
            'lagu'   => $this->laguModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('lagu');
        $builder->select('id, key, value, tahun, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['lagu'] = $query->getResultArray();

        return view('control/kepenyiaran/lagu/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'judul'     => $this->request->getPost('judul'),
            'artist'    => $this->request->getPost('artist'),
            'album'     => $this->request->getPost('album'),
            'genre'     => $this->request->getPost('genre'),
            'tipe'      => $this->request->getPost('tipe'),
            'lokasi'    => $this->request->getPost('lokasi'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->laguModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Lagu Berhasil Diubah!');

        return redirect('control/lagu');
    }

    // Delete Data
    public function delete($id)
    {
        $this->laguModel->delete($id);
        session()->setFlashdata('pesan', 'Data Lagu Berhasil Dihapus!');

        return redirect('control/lagu');
    }
}
