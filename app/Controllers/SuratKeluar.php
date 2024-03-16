<?php

namespace App\Controllers;

class SuratKeluar extends BaseController
{
    protected $suratkeluarModel;

    public function __construct()
    {
        $this->suratkeluarModel = new \App\Models\SuratKeluarModel();
    }

    // List SuratKeluar
    public function index()
    {
        $currentPage = $this->request->getVar('page_suratkeluar') ? $this->request->getVar('page_suratkeluar') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratkeluar = $this->suratkeluarModel->search($keyword);
        } else {
            $suratkeluar = $this->suratkeluarModel;
        }

        $suratkeluar->orderBy('id', 'ASC');

        $data = [
            'title'       => 'Rapma FM | Surat Keluar',
            'suratkeluar' => $suratkeluar->paginate(10, 'suratkeluar'),
            'pager'       => $suratkeluar->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/suratkeluar/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Surat Keluar',
        ];

        return view('control/suratkeluar/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'nosurat'     => $this->request->getPost('nosurat'),
            'penerima'    => $this->request->getPost('penerima'),
            'perihal'     => $this->request->getPost('perihal'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->suratkeluarModel->insert($data);
        session()->setFlashdata('pesan', 'Data Surat Keluar Berhasil Ditambahkan!');

        return redirect('control/suratkeluar');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Surat Keluar',
            'suratkeluar'   => $this->suratkeluarModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('suratkeluar');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['suratkeluar'] = $query->getResultArray();

        return view('control/suratkeluar/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'nosurat'     => $this->request->getPost('nosurat'),
            'penerima'    => $this->request->getPost('penerima'),
            'perihal'     => $this->request->getPost('perihal'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->suratkeluarModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Surat Keluar Berhasil Diubah!');

        return redirect('control/suratkeluar');
    }

    // Delete Data
    public function delete($id)
    {
        $this->suratkeluarModel->delete($id);
        session()->setFlashdata('pesan', 'Data Surat Keluar Berhasil Dihapus!');

        return redirect('control/suratkeluar');
    }
}
