<?php

namespace App\Controllers;

class Capeng extends BaseController
{
    protected $capengModel;

    public function __construct()
    {
        $this->capengModel = new \App\Models\CapengModel();
    }

    // List Capeng
    public function index()
    {
        $currentPage = $this->request->getVar('page_capeng') ? $this->request->getVar('page_capeng') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $capeng = $this->capengModel->search($keyword);
        } else {
            $capeng = $this->capengModel;
        }

        $capeng->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Kontrak Capeng',
            'capeng'      => $capeng->paginate(10, 'capeng'),
            'pager'       => $capeng->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/personalia/capeng/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Kontrak Capeng',
        ];

        return view('control/personalia/capeng/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'       => $this->request->getPost('nama'),
            'ttd'        => $this->request->getPost('ttd'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'pers'       => $this->request->getPost('pers'),
            'lanyard'    => $this->request->getPost('lanyard'),
            'pdh'        => $this->request->getPost('pdh'),
            'pin'        => $this->request->getPost('pin'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'        => $this->request->getPost('nama'),
            'value'      => json_encode($input),
        ];

        $this->capengModel->insert($data);
        session()->setFlashdata('pesan', 'Data Kontrak Capeng Berhasil Ditambahkan!');

        return redirect('control/capeng');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Kontrak Capeng',
            'capeng'    => $this->capengModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('capeng');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['capeng'] = $query->getResultArray();

        return view('control/personalia/capeng/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'       => $this->request->getPost('nama'),
            'ttd'        => $this->request->getPost('ttd'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'pers'       => $this->request->getPost('pers'),
            'lanyard'    => $this->request->getPost('lanyard'),
            'pdh'        => $this->request->getPost('pdh'),
            'pin'        => $this->request->getPost('pin'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'        => $this->request->getPost('nama'),
            'value'      => json_encode($input),
        ];

        $this->capengModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Kontrak Capeng Berhasil Diubah!');

        return redirect('control/capeng');
    }

    // Delete Data
    public function delete($id)
    {
        $this->capengModel->delete($id);
        session()->setFlashdata('pesan', 'Data Kontrak Capeng Berhasil Dihapus!');

        return redirect('control/capeng');
    }
}
