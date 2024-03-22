<?php

namespace App\Controllers;

class Penyiar extends BaseController
{
    protected $penyiarModel;

    public function __construct()
    {
        $this->penyiarModel = new \App\Models\PenyiarModel();
    }

    // List Penyiar
    public function index()
    {
        $data = [
            'title'       => 'Rapma FM | Penyiar',
            'penyiar'     => $this->penyiarModel->paginate(1, 'penyiar'),
        ];

        return view('control/kepenyiaran/penyiar/index', $data);
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Penyiar',
            'penyiar'   => $this->penyiarModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('penyiar');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['penyiar'] = $query->getResultArray();

        return view('control/kepenyiaran/penyiar/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'program'   => $this->request->getPost('program'),
            'penyiar1'  => $this->request->getPost('penyiar1'),
            'penyiar2'  => $this->request->getPost('penyiar2'),
        ];

        $data = [
            'key'       => $this->request->getPost('program'),
            'value'     => json_encode($input),
        ];

        $this->penyiarModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Penyiar Berhasil Diubah!');

        return redirect('control/penyiar');
    }
}
