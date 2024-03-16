<?php

namespace App\Controllers;

class Medpart extends BaseController
{
    protected $medpartModel;

    public function __construct()
    {
        $this->medpartModel = new \App\Models\MedpartModel();
    }

    // List Medpart
    public function index()
    {
        $currentPage = $this->request->getVar('page_medpart') ? $this->request->getVar('page_medpart') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $medpart = $this->medpartModel->search($keyword);
        } else {
            $medpart = $this->medpartModel;
        }

        $medpart->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Medpart',
            'medpart'     => $medpart->paginate(10, 'medpart'),
            'pager'       => $medpart->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/medpart/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Medpart',
        ];

        return view('control/medpart/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'tglmasuk'          => $this->request->getPost('tglmasuk'),
            'pelaksanaan'       => $this->request->getPost('pelaksanaan'),
            'instansi'          => $this->request->getPost('instansi'),
            'acara'             => $this->request->getPost('acara'),
            'status'            => $this->request->getPost('status'),
            'jenis'             => $this->request->getPost('jenis'),
            'kontraprestasi'    => $this->request->getPost('kontraprestasi'),
        ];

        $data = [
            'key'       => $this->request->getPost('tglmasuk'),
            'value'     => json_encode($input),
        ];

        $this->medpartModel->insert($data);
        session()->setFlashdata('pesan', 'Data Media Partner Berhasil Ditambahkan!');

        return redirect('control/medpart');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Media Partner',
            'medpart'   => $this->medpartModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('medpart');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['medpart'] = $query->getResultArray();

        return view('control/medpart/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tglmasuk'          => $this->request->getPost('tglmasuk'),
            'pelaksanaan'       => $this->request->getPost('pelaksanaan'),
            'instansi'          => $this->request->getPost('instansi'),
            'acara'             => $this->request->getPost('acara'),
            'status'            => $this->request->getPost('status'),
            'jenis'             => $this->request->getPost('jenis'),
            'kontraprestasi'    => $this->request->getPost('kontraprestasi'),
        ];

        $data = [
            'key'       => $this->request->getPost('tglmasuk'),
            'value'     => json_encode($input),
        ];

        $this->medpartModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Media Partner Berhasil Diubah!');

        return redirect('control/medpart');
    }

    // Delete Data
    public function delete($id)
    {
        $this->medpartModel->delete($id);
        session()->setFlashdata('pesan', 'Data Media Partner Berhasil Dihapus!');

        return redirect('control/medpart');
    }
}
