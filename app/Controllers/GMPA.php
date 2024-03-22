<?php

namespace App\Controllers;

class GMPA extends BaseController
{
    protected $gmpaModel;

    public function __construct()
    {
        $this->gmpaModel = new \App\Models\GMPAModel();
    }

    // List GMPA
    public function index()
    {
        $currentPage = $this->request->getVar('page_gmpa') ? $this->request->getVar('page_gmpa') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $gmpa = $this->gmpaModel->search($keyword);
        } else {
            $gmpa = $this->gmpaModel;
        }

        $gmpa->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Timeline Divisi GMPA',
            'gmpa'        => $gmpa->paginate(10, 'gmpa'),
            'pager'       => $gmpa->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/gmpa/gmpa/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Timeline Divisi GMPA',
        ];

        return view('control/gmpa/gmpa/form', $data);
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

        $this->gmpaModel->insert($data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi GMPA Berhasil Ditambahkan!');

        return redirect('control/gmpa');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Timeline Divisi GMPA',
            'gmpa'      => $this->gmpaModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('gmpa');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['gmpa'] = $query->getResultArray();

        return view('control/gmpa/gmpa/edit', $data);
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

        $this->gmpaModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi GMPA Berhasil Diubah!');

        return redirect('control/gmpa');
    }

    // Delete Data
    public function delete($id)
    {
        $this->gmpaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Timeline Divisi GMPA Berhasil Dihapus!');

        return redirect('control/gmpa');
    }
}
