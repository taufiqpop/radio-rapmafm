<?php

namespace App\Controllers;

class Konten extends BaseController
{
    protected $kontenModel;

    public function __construct()
    {
        $this->kontenModel = new \App\Models\KontenModel();
    }

    // List Konten
    public function index()
    {
        $currentPage = $this->request->getVar('page_konten') ? $this->request->getVar('page_konten') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $konten = $this->kontenModel->search($keyword);
        } else {
            $konten = $this->kontenModel;
        }

        $konten->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Data Konten',
            'konten'      => $konten->paginate(10, 'konten'),
            'pager'       => $konten->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/konten/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Data Konten',
        ];

        return view('control/konten/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'platform'   => $this->request->getPost('platform'),
            'status'     => $this->request->getPost('status'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'        => $this->request->getPost('judul'),
            'value'      => json_encode($input),
        ];

        $this->kontenModel->insert($data);
        session()->setFlashdata('pesan', 'Data Konten Berhasil Ditambahkan!');

        return redirect('control/konten');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Konten',
            'konten'   => $this->kontenModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('konten');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['konten'] = $query->getResultArray();

        return view('control/konten/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'platform'   => $this->request->getPost('platform'),
            'status'     => $this->request->getPost('status'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'        => $this->request->getPost('judul'),
            'value'      => json_encode($input),
        ];

        $this->kontenModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Konten Berhasil Diubah!');

        return redirect('control/konten');
    }

    // Delete Data
    public function delete($id)
    {
        $this->kontenModel->delete($id);
        session()->setFlashdata('pesan', 'Data Konten Berhasil Dihapus!');

        return redirect('control/konten');
    }
}
