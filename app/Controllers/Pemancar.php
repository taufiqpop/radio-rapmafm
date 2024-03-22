<?php

namespace App\Controllers;

class Pemancar extends BaseController
{
    protected $pemancarModel;

    public function __construct()
    {
        $this->pemancarModel = new \App\Models\PemancarModel();
    }

    // List Pemancar
    public function index()
    {
        $currentPage = $this->request->getVar('page_pemancar') ? $this->request->getVar('page_pemancar') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pemancar = $this->pemancarModel->search($keyword);
        } else {
            $pemancar = $this->pemancarModel;
        }

        $pemancar->orderBy('id', 'ASC');

        $data = [
            'title'       => 'Rapma FM | Pemancar',
            'pemancar'    => $pemancar->paginate(5, 'pemancar'),
            'pager'       => $pemancar->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/umum/pemancar/index', $data);
    }

    // Add Data Tanggal
    public function add()
    {
        $data = [
            'key' => $this->request->getPost('tanggal'),
        ];

        $this->pemancarModel->insert($data);
        session()->setFlashdata('pesan', 'Data Tanggal Berhasil Ditambahkan!');

        return redirect('control/pemancar');
    }

    // Detail Pemancar
    public function detail($id)
    {
        $data = [
            'title'    => 'Rapma FM | Detail Pemancar',
            'pemancar' => $this->pemancarModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pemancar');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pemancar'] = $query->getResultArray();

        return view('control/umum/pemancar/detail', $data);
    }

    // Form Pemancar
    public function form($id)
    {
        $data = [
            'title'    => 'Rapma FM | Form Pemancar',
            'pemancar' => $this->pemancarModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pemancar');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pemancar'] = $query->getResultArray();

        return view('control/umum/pemancar/form', $data);
    }

    // Insert Data
    public function insert($id)
    {
        $input = [
            [
                'daerah'    => $this->request->getPost('daerah'),
                'kondisi'   => $this->request->getPost('kondisi'),
            ]
        ];

        array_push($input);

        $data = [
            'value' => json_encode($input),
        ];

        $this->pemancarModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Pemancar Berhasil Ditambahkan!');

        return redirect('control/pemancar');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'    => 'Rapma FM | Edit Data Pemancar',
            'pemancar' => $this->pemancarModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('pemancar');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['pemancar'] = $query->getResultArray();

        return view('control/umum/pemancar/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'daerah'    => $this->request->getPost('daerah'),
            'kondisi'   => $this->request->getPost('kondisi'),
        ];

        $data = [
            'value'     => json_encode($input),
        ];

        $this->pemancarModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Pemancar Berhasil Diubah!');

        return redirect('control/pemancar');
    }

    // Delete Data
    public function delete($id)
    {
        $this->pemancarModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pemancar Berhasil Dihapus!');

        return redirect('control/pemancar');
    }
}
