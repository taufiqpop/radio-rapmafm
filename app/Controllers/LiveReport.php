<?php

namespace App\Controllers;

class LiveReport extends BaseController
{
    protected $livereportModel;

    public function __construct()
    {
        $this->livereportModel = new \App\Models\LiveReportModel();
    }

    // List LiveReport
    public function index()
    {
        $currentPage = $this->request->getVar('page_livereport') ? $this->request->getVar('page_livereport') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $livereport = $this->livereportModel->search($keyword);
        } else {
            $livereport = $this->livereportModel;
        }

        $livereport->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Live Report',
            'livereport'  => $livereport->paginate(10, 'livereport'),
            'pager'       => $livereport->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/livereport/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Live Report',
        ];

        return view('control/livereport/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'hari'      => $this->request->getPost('hari'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'jam'       => $this->request->getPost('jam'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'kendala'   => $this->request->getPost('kendala'),
            'status'    => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->livereportModel->insert($data);
        session()->setFlashdata('pesan', 'Data Live Report Berhasil Ditambahkan!');

        return redirect('control/livereport');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'        => 'Rapma FM | Edit Data Live Report',
            'livereport'   => $this->livereportModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('livereport');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['livereport'] = $query->getResultArray();

        return view('control/livereport/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'      => $this->request->getPost('nama'),
            'hari'      => $this->request->getPost('hari'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'jam'       => $this->request->getPost('jam'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'kendala'   => $this->request->getPost('kendala'),
            'status'    => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('tanggal'),
            'value'     => json_encode($input),
        ];

        $this->livereportModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Live Report Berhasil Diubah!');

        return redirect('control/livereport');
    }

    // Delete Data
    public function delete($id)
    {
        $this->livereportModel->delete($id);
        session()->setFlashdata('pesan', 'Data Live Report Berhasil Dihapus!');

        return redirect('control/livereport');
    }
}
