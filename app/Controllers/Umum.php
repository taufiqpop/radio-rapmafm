<?php

namespace App\Controllers;

class Umum extends BaseController
{
    protected $umumModel;

    public function __construct()
    {
        $this->umumModel = new \App\Models\UmumModel();
    }

    // List Umum
    public function index()
    {
        $currentPage = $this->request->getVar('page_umum') ? $this->request->getVar('page_umum') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $umum = $this->umumModel->search($keyword);
        } else {
            $umum = $this->umumModel;
        }

        $umum->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Timeline Divisi Umum',
            'umum'        => $umum->paginate(10, 'umum'),
            'pager'       => $umum->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/umum/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Timeline Divisi Umum',
        ];

        return view('control/umum/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'daritgl'      => $this->request->getPost('daritgl'),
            'sampaitgl'    => $this->request->getPost('sampaitgl'),
            'darihari'     => $this->request->getPost('darihari'),
            'sampaihari'   => $this->request->getPost('sampaihari'),
            'subdivisi'    => $this->request->getPost('subdivisi'),
            'proker'       => $this->request->getPost('proker'),
            'mulaitgl'     => $this->request->getPost('mulaitgl'),
            'selesaitgl'   => $this->request->getPost('selesaitgl'),
            'mulaihari'    => $this->request->getPost('mulaihari'),
            'selesaihari'  => $this->request->getPost('selesaihari'),
            'kendala'      => $this->request->getPost('kendala'),
            'status'       => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('daritgl'),
            'value'     => json_encode($input),
        ];

        $this->umumModel->insert($data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Umum Berhasil Ditambahkan!');

        return redirect('control/umum');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Timeline Divisi Umum',
            'umum'      => $this->umumModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('umum');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['umum'] = $query->getResultArray();

        return view('control/umum/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'daritgl'      => $this->request->getPost('daritgl'),
            'sampaitgl'    => $this->request->getPost('sampaitgl'),
            'darihari'     => $this->request->getPost('darihari'),
            'sampaihari'   => $this->request->getPost('sampaihari'),
            'subdivisi'    => $this->request->getPost('subdivisi'),
            'proker'       => $this->request->getPost('proker'),
            'mulaitgl'     => $this->request->getPost('mulaitgl'),
            'selesaitgl'   => $this->request->getPost('selesaitgl'),
            'mulaihari'    => $this->request->getPost('mulaihari'),
            'selesaihari'  => $this->request->getPost('selesaihari'),
            'kendala'      => $this->request->getPost('kendala'),
            'status'       => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('daritgl'),
            'value'     => json_encode($input),
        ];

        $this->umumModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Umum Berhasil Diubah!');

        return redirect('control/umum');
    }

    // Delete Data
    public function delete($id)
    {
        $this->umumModel->delete($id);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Umum Berhasil Dihapus!');

        return redirect('control/umum');
    }
}
