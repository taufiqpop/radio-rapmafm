<?php

namespace App\Controllers;

class Iklan extends BaseController
{
    protected $iklanModel;

    public function __construct()
    {
        $this->iklanModel = new \App\Models\IklanModel();
    }

    // List Iklan
    public function index()
    {
        $currentPage = $this->request->getVar('page_iklan') ? $this->request->getVar('page_iklan') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $iklan = $this->iklanModel->search($keyword);
        } else {
            $iklan = $this->iklanModel;
        }

        $iklan->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Iklan',
            'iklan'       => $iklan->paginate(10, 'iklan'),
            'pager'       => $iklan->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/iklan/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Iklan',
        ];

        return view('control/iklan/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'client'    => $this->request->getPost('client'),
            'tglmou'    => $this->request->getPost('tglmou'),
            'paket'     => $this->request->getPost('paket'),
            'harga'     => $this->request->getPost('harga'),
            'status'    => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->iklanModel->insert($data);
        session()->setFlashdata('pesan', 'Data Media Partner Berhasil Ditambahkan!');

        return redirect('control/iklan');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Media Partner',
            'iklan'   => $this->iklanModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('iklan');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['iklan'] = $query->getResultArray();

        return view('control/iklan/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'client'    => $this->request->getPost('client'),
            'tglmou'    => $this->request->getPost('tglmou'),
            'paket'     => $this->request->getPost('paket'),
            'harga'     => $this->request->getPost('harga'),
            'status'    => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->iklanModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Media Partner Berhasil Diubah!');

        return redirect('control/iklan');
    }

    // Delete Data
    public function delete($id)
    {
        $this->iklanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Media Partner Berhasil Dihapus!');

        return redirect('control/iklan');
    }
}
