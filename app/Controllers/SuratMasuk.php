<?php

namespace App\Controllers;

class SuratMasuk extends BaseController
{
    protected $suratmasukModel;

    public function __construct()
    {
        $this->suratmasukModel = new \App\Models\SuratMasukModel();
    }

    // List SuratMasuk
    public function index()
    {
        $currentPage = $this->request->getVar('page_suratmasuk') ? $this->request->getVar('page_suratmasuk') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratmasuk = $this->suratmasukModel->search($keyword);
        } else {
            $suratmasuk = $this->suratmasukModel;
        }

        $suratmasuk->orderBy('id', 'ASC');

        $data = [
            'title'       => 'Rapma FM | Surat Masuk',
            'suratmasuk'  => $suratmasuk->paginate(10, 'suratmasuk'),
            'pager'       => $suratmasuk->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/suratmasuk/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Surat Masuk',
        ];

        return view('control/suratmasuk/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'hari'        => $this->request->getPost('hari'),
            'nosurat'     => $this->request->getPost('nosurat'),
            'instansi'    => $this->request->getPost('instansi'),
            'perihal'     => $this->request->getPost('perihal'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->suratmasukModel->insert($data);
        session()->setFlashdata('pesan', 'Data Surat Masuk Berhasil Ditambahkan!');

        return redirect('control/suratmasuk');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Surat Masuk',
            'suratmasuk'   => $this->suratmasukModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('suratmasuk');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['suratmasuk'] = $query->getResultArray();

        return view('control/suratmasuk/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'hari'        => $this->request->getPost('hari'),
            'nosurat'     => $this->request->getPost('nosurat'),
            'instansi'    => $this->request->getPost('instansi'),
            'perihal'     => $this->request->getPost('perihal'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->suratmasukModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Surat Masuk Berhasil Diubah!');

        return redirect('control/suratmasuk');
    }

    // Delete Data
    public function delete($id)
    {
        $this->suratmasukModel->delete($id);
        session()->setFlashdata('pesan', 'Data Surat Masuk Berhasil Dihapus!');

        return redirect('control/suratmasuk');
    }
}
