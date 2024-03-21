<?php

namespace App\Controllers;

class Infografis extends BaseController
{
    protected $infografisModel;

    public function __construct()
    {
        $this->infografisModel = new \App\Models\InfografisModel();
    }

    // List Infografis
    public function index()
    {
        $currentPage = $this->request->getVar('page_infografis') ? $this->request->getVar('page_infografis') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $infografis = $this->infografisModel->search($keyword);
        } else {
            $infografis = $this->infografisModel;
        }

        $infografis->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Infografis',
            'infografis'    => $infografis->paginate(10, 'infografis'),
            'pager'         => $infografis->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/infografis/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Infografis',
        ];

        return view('control/infografis/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->infografisModel->insert($data);
        session()->setFlashdata('pesan', 'Data Infografis Berhasil Ditambahkan!');

        return redirect('control/infografis');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Infografis',
            'infografis'          => $this->infografisModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('infografis');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['infografis'] = $query->getResultArray();

        return view('control/infografis/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->infografisModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Infografis Berhasil Diubah!');

        return redirect('control/infografis');
    }

    // Delete Data
    public function delete($id)
    {
        $this->infografisModel->delete($id);
        session()->setFlashdata('pesan', 'Data Infografis Berhasil Dihapus!');

        return redirect('control/infografis');
    }
}
