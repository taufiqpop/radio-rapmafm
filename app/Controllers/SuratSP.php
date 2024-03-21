<?php

namespace App\Controllers;

class SuratSP extends BaseController
{
    protected $suratspModel;

    public function __construct()
    {
        $this->suratspModel = new \App\Models\SuratSPModel();
    }

    // List SuratSP
    public function index()
    {
        $currentPage = $this->request->getVar('page_suratsp') ? $this->request->getVar('page_suratsp') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratsp = $this->suratspModel->search($keyword);
        } else {
            $suratsp = $this->suratspModel;
        }

        $suratsp->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Surat SP',
            'suratsp'     => $suratsp->paginate(10, 'suratsp'),
            'pager'       => $suratsp->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/suratsp/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Surat SP',
        ];

        return view('control/suratsp/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'       => $this->request->getPost('nama'),
            'sp'         => $this->request->getPost('sp'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'alasan'     => $this->request->getPost('alasan'),
            'prodi'      => $this->request->getPost('prodi'),
            'angkatan'   => $this->request->getPost('angkatan'),
            'nohp'       => $this->request->getPost('nohp'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'        => $this->request->getPost('nama'),
            'value'      => json_encode($input),
        ];

        $this->suratspModel->insert($data);
        session()->setFlashdata('pesan', 'Data Surat SP Berhasil Ditambahkan!');

        return redirect('control/suratsp');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Surat SP',
            'suratsp'   => $this->suratspModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('suratsp');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['suratsp'] = $query->getResultArray();

        return view('control/suratsp/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'       => $this->request->getPost('nama'),
            'sp'         => $this->request->getPost('sp'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'alasan'     => $this->request->getPost('alasan'),
            'prodi'      => $this->request->getPost('prodi'),
            'angkatan'   => $this->request->getPost('angkatan'),
            'nohp'       => $this->request->getPost('nohp'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->suratspModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Surat SP Berhasil Diubah!');

        return redirect('control/suratsp');
    }

    // Delete Data
    public function delete($id)
    {
        $this->suratspModel->delete($id);
        session()->setFlashdata('pesan', 'Data Surat SP Berhasil Dihapus!');

        return redirect('control/suratsp');
    }
}
