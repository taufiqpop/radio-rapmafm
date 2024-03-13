<?php

namespace App\Controllers;

class About extends BaseController
{
    protected $aboutModel;

    public function __construct()
    {
        $this->aboutModel = new \App\Models\AboutModel();
    }

    // About
    public function index()
    {
        $data = [
            'title'      => 'Rapma FM | About',
            'about'      => $this->aboutModel->paginate(5, 'about'),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('about');
        $builder->select('id, value, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['about'] = $query->getResultArray();

        return view('control/about/index', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link'    => $this->request->getPost('link'),
        ];

        $data = [
            'id'    => $id,
            'value' => json_encode($input),
        ];

        $this->aboutModel->save($data);
        session()->setFlashdata('pesan', 'Data About Berhasil Diubah!');

        return redirect('control/about');
    }
}
