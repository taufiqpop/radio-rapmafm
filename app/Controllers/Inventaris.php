<?php

namespace App\Controllers;

class Inventaris extends BaseController
{
    protected $inventarisModel;

    public function __construct()
    {
        $this->inventarisModel = new \App\Models\InventarisModel();
    }

    // List Inventaris
    public function index()
    {
        $currentPage = $this->request->getVar('page_inventaris') ? $this->request->getVar('page_inventaris') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $inventaris = $this->inventarisModel->search($keyword);
        } else {
            $inventaris = $this->inventarisModel;
        }

        $inventaris->orderBy('kode', 'ASC');

        $data = [
            'title'       => 'Rapma FM | Inventaris',
            'inventaris'  => $inventaris->paginate(25, 'inventaris'),
            'pager'       => $inventaris->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/umum/inventaris/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title' => 'Rapma FM | Form Inventaris',
        ];

        return view('control/umum/inventaris/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'barang'    => $this->request->getPost('barang'),
            'nomor'     => $this->request->getPost('nomor'),
            'jumlah'    => $this->request->getPost('jumlah'),
            'kondisi'   => $this->request->getPost('kondisi'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'hari'      => $this->request->getPost('hari'),
        ];

        $data = [
            'key'       => $this->request->getPost('barang'),
            'value'     => json_encode($input),
            'kode'      => $this->request->getPost('kode'),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->inventarisModel->insert($data);
        session()->setFlashdata('pesan', 'Data Inventaris Berhasil Ditambahkan!');

        return redirect('control/inventaris');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'Rapma FM | Edit Data Inventaris',
            'inventaris' => $this->inventarisModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('inventaris');
        $builder->select('id, key, value, kode, tahun, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['inventaris'] = $query->getResultArray();

        return view('control/umum/inventaris/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'barang'    => $this->request->getPost('barang'),
            'nomor'     => $this->request->getPost('nomor'),
            'jumlah'    => $this->request->getPost('jumlah'),
            'kondisi'   => $this->request->getPost('kondisi'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'hari'      => $this->request->getPost('hari'),
        ];

        $data = [
            'key'       => $this->request->getPost('barang'),
            'value'     => json_encode($input),
            'kode'      => $this->request->getPost('kode'),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->inventarisModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Inventaris Berhasil Diubah!');

        return redirect('control/inventaris');
    }

    // Delete Data
    public function delete($id)
    {
        $this->inventarisModel->delete($id);
        session()->setFlashdata('pesan', 'Data Inventaris Berhasil Dihapus!');

        return redirect('control/inventaris');
    }
}
