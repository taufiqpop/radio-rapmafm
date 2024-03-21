<?php

namespace App\Controllers;

class KerjaBakti extends BaseController
{
    protected $kerjabaktiModel;

    public function __construct()
    {
        $this->kerjabaktiModel = new \App\Models\KerjaBaktiModel();
    }

    // List KerjaBakti
    public function index()
    {
        $currentPage = $this->request->getVar('page_kerjabakti') ? $this->request->getVar('page_kerjabakti') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kerjabakti = $this->kerjabaktiModel->search($keyword);
        } else {
            $kerjabakti = $this->kerjabaktiModel;
        }

        $kerjabakti->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Kerja Bakti',
            'kerjabakti'  => $kerjabakti->paginate(10, 'kerjabakti'),
            'pager'       => $kerjabakti->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/kerjabakti/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Kerja Bakti',
        ];

        return view('control/kerjabakti/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'hari'        => $this->request->getPost('hari'),
            'jmlcrew'     => $this->request->getPost('jmlcrew'),
            'jmlpengurus' => $this->request->getPost('jmlpengurus'),
            'alasan'      => $this->request->getPost('alasan'),
            'kendala'     => $this->request->getPost('kendala'),
            'status'      => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->kerjabaktiModel->insert($data);
        session()->setFlashdata('pesan', 'Data Kerja Bakti Berhasil Ditambahkan!');

        return redirect('control/kerjabakti');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Kerja Bakti',
            'kerjabakti'   => $this->kerjabaktiModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('kerjabakti');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['kerjabakti'] = $query->getResultArray();

        return view('control/kerjabakti/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'hari'        => $this->request->getPost('hari'),
            'jmlcrew'     => $this->request->getPost('jmlcrew'),
            'jmlpengurus' => $this->request->getPost('jmlpengurus'),
            'alasan'      => $this->request->getPost('alasan'),
            'kendala'     => $this->request->getPost('kendala'),
            'status'      => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->kerjabaktiModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Kerja Bakti Berhasil Diubah!');

        return redirect('control/kerjabakti');
    }

    // Delete Data
    public function delete($id)
    {
        $this->kerjabaktiModel->delete($id);
        session()->setFlashdata('pesan', 'Data Kerja Bakti Berhasil Dihapus!');

        return redirect('control/kerjabakti');
    }
}
