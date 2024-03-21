<?php

namespace App\Controllers;

class Pengurus extends BaseController
{
    protected $pengurusModel;

    public function __construct()
    {
        $this->pengurusModel = new \App\Models\PengurusModel();
    }

    // List Pengurus
    public function index()
    {
        $currentPage = $this->request->getVar('page_pengurus') ? $this->request->getVar('page_pengurus') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pengurus = $this->pengurusModel->search($keyword);
        } else {
            $pengurus = $this->pengurusModel;
        }

        $pengurus->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Pengurus',
            'pengurus'    => $pengurus->paginate(10, 'pengurus'),
            'pager'       => $pengurus->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/anggota/pengurus/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title' => 'Rapma FM | Form Pengurus',
        ];

        return view('control/anggota/pengurus/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'nickname'  => $this->request->getPost('nickname'),
            'divisi'    => $this->request->getPost('divisi'),
            'subdivisi' => $this->request->getPost('subdivisi'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'semester'  => $this->request->getPost('semester'),
            'nim'       => $this->request->getPost('nim'),
            'nia'       => $this->request->getPost('nia'),
            'domisili'  => $this->request->getPost('domisili'),
            'nohp'      => $this->request->getPost('nohp'),
            'status'    => $this->request->getPost('status'),
            'instagram' => $this->request->getPost('instagram'),
            'twitter'   => $this->request->getPost('twitter'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->pengurusModel->insert($data);
        session()->setFlashdata('pesan', 'Data Pengurus Berhasil Ditambahkan!');

        return redirect('control/pengurus');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'    => 'Rapma FM | Edit Data Pengurus',
            'pengurus' => $this->pengurusModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pengurus');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pengurus'] = $query->getResultArray();

        return view('control/anggota/pengurus/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'nickname'  => $this->request->getPost('nickname'),
            'divisi'    => $this->request->getPost('divisi'),
            'subdivisi' => $this->request->getPost('subdivisi'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'semester'  => $this->request->getPost('semester'),
            'nim'       => $this->request->getPost('nim'),
            'nia'       => $this->request->getPost('nia'),
            'domisili'  => $this->request->getPost('domisili'),
            'nohp'      => $this->request->getPost('nohp'),
            'status'    => $this->request->getPost('status'),
            'instagram' => $this->request->getPost('instagram'),
            'twitter'   => $this->request->getPost('twitter'),
        ];

        $data = [
            'key'       => $this->request->getPost('pengurus'),
            'value'     => json_encode($input),
        ];

        $this->pengurusModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Pengurus Berhasil Diubah!');

        return redirect('control/pengurus');
    }

    // Delete Data
    public function delete($id)
    {
        $this->pengurusModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pengurus Berhasil Dihapus!');

        return redirect('control/pengurus');
    }
}
