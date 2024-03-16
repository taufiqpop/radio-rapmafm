<?php

namespace App\Controllers;

class MagangInternal extends BaseController
{
    protected $maganginternalModel;

    public function __construct()
    {
        $this->maganginternalModel = new \App\Models\MagangInternalModel();
    }

    // List MagangInternal
    public function index()
    {
        $currentPage = $this->request->getVar('page_maganginternal') ? $this->request->getVar('page_maganginternal') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $maganginternal = $this->maganginternalModel->search($keyword);
        } else {
            $maganginternal = $this->maganginternalModel;
        }

        $maganginternal->orderBy('id', 'DESC');

        $data = [
            'title'             => 'Rapma FM | Magang Internal',
            'maganginternal'    => $maganginternal->paginate(5, 'maganginternal'),
            'pager'             => $maganginternal->pager,
            'currentPage'       => $currentPage,
        ];

        return view('control/maganginternal/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Magang Internal',
        ];

        return view('control/maganginternal/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tanggal'  => $this->request->getPost('tanggal'),
            'waktu'    => $this->request->getPost('waktu'),
            'materi'   => $this->request->getPost('materi'),
            'pemateri' => $this->request->getPost('pemateri'),
            'tempat'   => $this->request->getPost('tempat'),
            'status'   => $this->request->getPost('status'),
        ];

        $data = [
            'key'      => $this->request->getPost('tanggal'),
            'value'    => json_encode($input),
        ];

        $this->maganginternalModel->insert($data);
        session()->setFlashdata('pesan', 'Data Magang Internal Berhasil Ditambahkan!');

        return redirect('control/maganginternal');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'            => 'Rapma FM | Edit Data Magang Internal',
            'maganginternal'   => $this->maganginternalModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('maganginternal');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['maganginternal'] = $query->getResultArray();

        return view('control/maganginternal/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tanggal'  => $this->request->getPost('tanggal'),
            'waktu'    => $this->request->getPost('waktu'),
            'materi'   => $this->request->getPost('materi'),
            'pemateri' => $this->request->getPost('pemateri'),
            'tempat'   => $this->request->getPost('tempat'),
            'status'   => $this->request->getPost('status'),
        ];

        $data = [
            'key'      => $this->request->getPost('nama'),
            'value'    => json_encode($input),
        ];

        $this->maganginternalModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Magang Internal Berhasil Diubah!');

        return redirect('control/maganginternal');
    }

    // Delete Data
    public function delete($id)
    {
        $this->maganginternalModel->delete($id);
        session()->setFlashdata('pesan', 'Data Magang Internal Berhasil Dihapus!');

        return redirect('control/maganginternal');
    }
}
