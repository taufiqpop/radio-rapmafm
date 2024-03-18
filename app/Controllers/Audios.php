<?php

namespace App\Controllers;

class Audios extends BaseController
{
    protected $audiosModel;

    public function __construct()
    {
        $this->audiosModel = new \App\Models\AudiosModel();
    }

    // List Audios
    public function index()
    {
        $currentPage = $this->request->getVar('page_audios') ? $this->request->getVar('page_audios') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $audios = $this->audiosModel->search($keyword);
        } else {
            $audios = $this->audiosModel;
        }

        $audios->orderBy('type', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Audio',
            'audios'      => $audios->paginate(10, 'audios'),
            'pager'       => $audios->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/audios/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Audio',
        ];

        return view('control/audios/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'title'         => $this->request->getPost('title'),
            'tahun'         => $this->request->getPost('tahun'),
            'keterangan'    => $this->request->getPost('keterangan'),
            'status'        => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('title'),
            'value'     => json_encode($input),
            'type'      => $this->request->getPost('type'),
        ];

        $this->audiosModel->insert($data);
        session()->setFlashdata('pesan', 'Data Audio Berhasil Ditambahkan!');

        return redirect('control/audios');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'    => 'Rapma FM | Edit Data Audio',
            'audios'   => $this->audiosModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('audios');
        $builder->select('id, key, value, type, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['audios'] = $query->getResultArray();

        return view('control/audios/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'title'         => $this->request->getPost('title'),
            'tahun'         => $this->request->getPost('tahun'),
            'keterangan'    => $this->request->getPost('keterangan'),
            'status'        => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('title'),
            'value'     => json_encode($input),
            'type'      => $this->request->getPost('type'),
        ];

        $this->audiosModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Audio Berhasil Diubah!');

        return redirect('control/audios');
    }

    // Delete Data
    public function delete($id)
    {
        $this->audiosModel->delete($id);
        session()->setFlashdata('pesan', 'Data Audio Berhasil Dihapus!');

        return redirect('control/audios');
    }
}
