<?php

namespace App\Controllers;

class PemutaranSerentak extends BaseController
{
    protected $pemutaranserentakModel;

    public function __construct()
    {
        $this->pemutaranserentakModel = new \App\Models\PemutaranSerentakModel();
    }

    // List PemutaranSerentak
    public function index()
    {
        $currentPage = $this->request->getVar('page_pemutaranserentak') ? $this->request->getVar('page_pemutaranserentak') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pemutaranserentak = $this->pemutaranserentakModel->search($keyword);
        } else {
            $pemutaranserentak = $this->pemutaranserentakModel;
        }

        $pemutaranserentak->orderBy('id', 'ASC');

        $data = [
            'title'                   => 'Rapma FM | Pemutaran Serentak',
            'pemutaranserentak'       => $pemutaranserentak->paginate(10, 'pemutaranserentak'),
            'pager'                   => $pemutaranserentak->pager,
            'currentPage'             => $currentPage,
        ];

        return view('control/kepenyiaran/pemutaranserentak/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Pemutaran Serentak',
        ];

        return view('control/kepenyiaran/pemutaranserentak/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tanggal'      => $this->request->getPost('tanggal'),
            'label'        => $this->request->getPost('label'),
            'penyanyi'     => $this->request->getPost('penyanyi'),
            'judul'        => $this->request->getPost('judul'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->pemutaranserentakModel->insert($data);
        session()->setFlashdata('pesan', 'Data Pemutaran Serentak Berhasil Ditambahkan!');

        return redirect('control/pemutaranserentak');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Pemutaran Serentak',
            'pemutaranserentak'   => $this->pemutaranserentakModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pemutaranserentak');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pemutaranserentak'] = $query->getResultArray();

        return view('control/kepenyiaran/pemutaranserentak/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tanggal'      => $this->request->getPost('tanggal'),
            'label'        => $this->request->getPost('label'),
            'penyanyi'     => $this->request->getPost('penyanyi'),
            'judul'        => $this->request->getPost('judul'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->pemutaranserentakModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Pemutaran Serentak Berhasil Diubah!');

        return redirect('control/pemutaranserentak');
    }

    // Delete Data
    public function delete($id)
    {
        $this->pemutaranserentakModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pemutaran Serentak Berhasil Dihapus!');

        return redirect('control/pemutaranserentak');
    }
}
