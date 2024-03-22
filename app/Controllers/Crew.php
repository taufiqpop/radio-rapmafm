<?php

namespace App\Controllers;

class Crew extends BaseController
{
    protected $crewModel;

    public function __construct()
    {
        $this->crewModel = new \App\Models\CrewModel();
    }

    // List Crew
    public function index()
    {
        $currentPage = $this->request->getVar('page_crew') ? $this->request->getVar('page_crew') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $crew = $this->crewModel->search($keyword);
        } else {
            $crew = $this->crewModel;
        }

        $crew->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Crew',
            'crew'        => $crew->paginate(10, 'crew'),
            'pager'       => $crew->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/personalia/anggota/crew/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Crew',
        ];

        return view('control/personalia/anggota/crew/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'nickname'  => $this->request->getPost('nickname'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'semester'  => $this->request->getPost('semester'),
            'nim'       => $this->request->getPost('nim'),
            'domisili'  => $this->request->getPost('domisili'),
            'nohp'      => $this->request->getPost('nohp'),
            'status'    => $this->request->getPost('status'),
            'instagram' => $this->request->getPost('instagram'),
            'twitter'   => $this->request->getPost('twitter'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->crewModel->insert($data);
        session()->setFlashdata('pesan', 'Data Crew Berhasil Ditambahkan!');

        return redirect('control/crew');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Crew',
            'crew'      => $this->crewModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('crew');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['crew'] = $query->getResultArray();

        return view('control/personalia/anggota/crew/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'nickname'  => $this->request->getPost('nickname'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'semester'  => $this->request->getPost('semester'),
            'nim'       => $this->request->getPost('nim'),
            'domisili'  => $this->request->getPost('domisili'),
            'nohp'      => $this->request->getPost('nohp'),
            'status'    => $this->request->getPost('status'),
            'instagram' => $this->request->getPost('instagram'),
            'twitter'   => $this->request->getPost('twitter'),
        ];

        $data = [
            'key'       => $this->request->getPost('crew'),
            'value'     => json_encode($input),
        ];

        $this->crewModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Crew Berhasil Diubah!');

        return redirect('control/crew');
    }

    // Delete Data
    public function delete($id)
    {
        $this->crewModel->delete($id);
        session()->setFlashdata('pesan', 'Data Crew Berhasil Dihapus!');

        return redirect('control/crew');
    }
}
