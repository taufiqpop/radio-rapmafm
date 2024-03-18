<?php

namespace App\Controllers;

class Personalia extends BaseController
{
    protected $personaliaModel;

    public function __construct()
    {
        $this->personaliaModel = new \App\Models\PersonaliaModel();
    }

    // List Personalia
    public function index()
    {
        $currentPage = $this->request->getVar('page_personalia') ? $this->request->getVar('page_personalia') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $personalia = $this->personaliaModel->search($keyword);
        } else {
            $personalia = $this->personaliaModel;
        }

        $personalia->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Timeline Divisi Personalia',
            'personalia'  => $personalia->paginate(10, 'personalia'),
            'pager'       => $personalia->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/personalia/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Timeline Divisi Personalia',
        ];

        return view('control/personalia/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tanggal'      => $this->request->getPost('tanggal'),
            'subdivisi'    => $this->request->getPost('subdivisi'),
            'proker'       => $this->request->getPost('proker'),
            'dari'         => $this->request->getPost('dari'),
            'sampai'       => $this->request->getPost('sampai'),
            'kendala'      => $this->request->getPost('kendala'),
            'status'       => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->personaliaModel->insert($data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Personalia Berhasil Ditambahkan!');

        return redirect('control/personalia');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Timeline Divisi Personalia',
            'personalia'    => $this->personaliaModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('personalia');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['personalia'] = $query->getResultArray();

        return view('control/personalia/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tanggal'      => $this->request->getPost('tanggal'),
            'subdivisi'    => $this->request->getPost('subdivisi'),
            'proker'       => $this->request->getPost('proker'),
            'dari'         => $this->request->getPost('dari'),
            'sampai'       => $this->request->getPost('sampai'),
            'kendala'      => $this->request->getPost('kendala'),
            'status'       => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->personaliaModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Personalia Berhasil Diubah!');

        return redirect('control/personalia');
    }

    // Delete Data
    public function delete($id)
    {
        $this->personaliaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Personalia Berhasil Dihapus!');

        return redirect('control/personalia');
    }
}
