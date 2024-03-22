<?php

namespace App\Controllers;

class MTalent extends BaseController
{
    protected $mtalentModel;

    public function __construct()
    {
        $this->mtalentModel = new \App\Models\MTalentModel();
    }

    // List MTalent
    public function index()
    {
        $currentPage = $this->request->getVar('page_mtalent') ? $this->request->getVar('page_mtalent') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $mtalent = $this->mtalentModel->search($keyword);
        } else {
            $mtalent = $this->mtalentModel;
        }

        $mtalent->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | M-Talent',
            'mtalent'     => $mtalent->paginate(10, 'mtalent'),
            'pager'       => $mtalent->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/marketing/mtalent/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form M-Talent',
        ];

        return view('control/marketing/mtalent/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tglmulai'          => $this->request->getPost('tglmulai'),
            'harimulai'         => $this->request->getPost('harimulai'),
            'tglselesai'        => $this->request->getPost('tglselesai'),
            'hariselesai'       => $this->request->getPost('hariselesai'),
            'jenis'             => $this->request->getPost('jenis'),
            'instansi'          => $this->request->getPost('instansi'),
            'acara'             => $this->request->getPost('acara'),
            'talent'            => $this->request->getPost('talent'),
            'tempat'            => $this->request->getPost('tempat'),
            'feetalent'         => $this->request->getPost('feetalent'),
            'feerapma'          => $this->request->getPost('feerapma'),
            'kontraprestasi'    => $this->request->getPost('kontraprestasi'),
        ];

        $data = [
            'key'       => $this->request->getPost('tglmulai'),
            'value'     => json_encode($input),
        ];

        $this->mtalentModel->insert($data);
        session()->setFlashdata('pesan', 'Data M-Talent Berhasil Ditambahkan!');

        return redirect('control/mtalent');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data M-Talent',
            'mtalent'   => $this->mtalentModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('mtalent');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['mtalent'] = $query->getResultArray();

        return view('control/marketing/mtalent/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tglmulai'          => $this->request->getPost('tglmulai'),
            'harimulai'         => $this->request->getPost('harimulai'),
            'tglselesai'        => $this->request->getPost('tglselesai'),
            'hariselesai'       => $this->request->getPost('hariselesai'),
            'jenis'             => $this->request->getPost('jenis'),
            'instansi'          => $this->request->getPost('instansi'),
            'acara'             => $this->request->getPost('acara'),
            'talent'            => $this->request->getPost('talent'),
            'tempat'            => $this->request->getPost('tempat'),
            'feetalent'         => $this->request->getPost('feetalent'),
            'feerapma'          => $this->request->getPost('feerapma'),
            'kontraprestasi'    => $this->request->getPost('kontraprestasi'),
        ];

        $data = [
            'key'       => $this->request->getPost('tglmulai'),
            'value'     => json_encode($input),
        ];

        $this->mtalentModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data M-Talent Berhasil Diubah!');

        return redirect('control/mtalent');
    }

    // Delete Data
    public function delete($id)
    {
        $this->mtalentModel->delete($id);
        session()->setFlashdata('pesan', 'Data M-Talent Berhasil Dihapus!');

        return redirect('control/mtalent');
    }
}
