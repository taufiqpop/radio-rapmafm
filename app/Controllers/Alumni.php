<?php

namespace App\Controllers;

class Alumni extends BaseController
{
    protected $alumniModel;

    public function __construct()
    {
        $this->alumniModel = new \App\Models\AlumniModel();
    }

    // List Alumni
    public function index()
    {
        $currentPage = $this->request->getVar('page_alumni') ? $this->request->getVar('page_alumni') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $alumni = $this->alumniModel->search($keyword);
        } else {
            $alumni = $this->alumniModel;
        }

        $alumni->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Alumni',
            'alumni'        => $alumni->paginate(10, 'alumni'),
            'pager'         => $alumni->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/anggota/alumni/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title' => 'Rapma FM | Form Alumni',
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('alumni');
        $builder->select('id, key, value, tahun');

        return view('control/anggota/alumni/form', $data);
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
            'nohp'      => $this->request->getPost('nohp'),
            'instagram' => $this->request->getPost('instagram'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->alumniModel->save($data);
        session()->setFlashdata('pesan', 'Data Alumni Berhasil Ditambahkan!');

        return redirect('control/alumni');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Alumni',
            'alumni'      => $this->alumniModel->find($id),
            'validation'    => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('alumni');
        $builder->select('id, key, value, tahun, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['alumni'] = $query->getResultArray();

        return view('control/anggota/alumni/edit', $data);
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
            'nohp'      => $this->request->getPost('nohp'),
            'instagram' => $this->request->getPost('instagram'),
        ];

        $data = [
            'id'        => $id,
            'key'       => $this->request->getPost('alumni'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->alumniModel->save($data);
        session()->setFlashdata('pesan', 'Data Alumni Berhasil Diubah!');

        return redirect('control/alumni');
    }

    // Delete Data
    public function delete($id)
    {
        $this->alumniModel->delete($id);
        session()->setFlashdata('pesan', 'Data Alumni Berhasil Dihapus!');

        return redirect('control/alumni');
    }
}
