<?php

namespace App\Controllers;

class ArusKas extends BaseController
{
    protected $aruskasModel;

    public function __construct()
    {
        $this->aruskasModel = new \App\Models\ArusKasModel();
    }

    // List ArusKas
    public function index()
    {
        $currentPage = $this->request->getVar('page_aruskas') ? $this->request->getVar('page_aruskas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $aruskas = $this->aruskasModel->search($keyword);
        } else {
            $aruskas = $this->aruskasModel;
        }

        $aruskas->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | ArusKas',
            'aruskas'     => $aruskas->paginate(10, 'aruskas'),
            'pager'       => $aruskas->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/gmpa/aruskas/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Arus Kas',
        ];

        return view('control/gmpa/aruskas/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'total'     => $this->request->getPost('total'),
            'sudahbayar'  => $this->request->getPost('sudahbayar'),
            'status'    => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->aruskasModel->insert($data);
        session()->setFlashdata('pesan', 'Data Arus Kas Berhasil Ditambahkan!');

        return redirect('control/aruskas');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'   => 'Rapma FM | Edit Data Arus Kas',
            'aruskas'   => $this->aruskasModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('aruskas');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['aruskas'] = $query->getResultArray();

        return view('control/gmpa/aruskas/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'total'     => $this->request->getPost('total'),
            'sudahbayar'  => $this->request->getPost('sudahbayar'),
            'status'    => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->aruskasModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Arus Kas Berhasil Diubah!');

        return redirect('control/aruskas');
    }

    // Delete Data
    public function delete($id)
    {
        $this->aruskasModel->delete($id);
        session()->setFlashdata('pesan', 'Data Arus Kas Berhasil Dihapus!');

        return redirect('control/aruskas');
    }
}
