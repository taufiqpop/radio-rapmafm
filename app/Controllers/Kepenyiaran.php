<?php

namespace App\Controllers;

class Kepenyiaran extends BaseController
{
    protected $kepenyiaranModel;

    public function __construct()
    {
        $this->kepenyiaranModel = new \App\Models\KepenyiaranModel();
    }

    // List Kepenyiaran
    public function index()
    {
        $currentPage = $this->request->getVar('page_kepenyiaran') ? $this->request->getVar('page_kepenyiaran') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kepenyiaran = $this->kepenyiaranModel->search($keyword);
        } else {
            $kepenyiaran = $this->kepenyiaranModel;
        }

        $kepenyiaran->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Timeline Divisi Kepenyiaran',
            'kepenyiaran' => $kepenyiaran->paginate(10, 'kepenyiaran'),
            'pager'       => $kepenyiaran->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/kepenyiaran/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Timeline Divisi Kepenyiaran',
        ];

        return view('control/kepenyiaran/form', $data);
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

        $this->kepenyiaranModel->insert($data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Kepenyiaran Berhasil Ditambahkan!');

        return redirect('control/kepenyiaran');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'        => 'Rapma FM | Edit Timeline Divisi Kepenyiaran',
            'kepenyiaran'  => $this->kepenyiaranModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('kepenyiaran');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['kepenyiaran'] = $query->getResultArray();

        return view('control/kepenyiaran/edit', $data);
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

        $this->kepenyiaranModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Kepenyiaran Berhasil Diubah!');

        return redirect('control/kepenyiaran');
    }

    // Delete Data
    public function delete($id)
    {
        $this->kepenyiaranModel->delete($id);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Kepenyiaran Berhasil Dihapus!');

        return redirect('control/kepenyiaran');
    }
}
