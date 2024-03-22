<?php

namespace App\Controllers;

class Peminjaman extends BaseController
{
    protected $peminjamanModel;

    public function __construct()
    {
        $this->peminjamanModel = new \App\Models\PeminjamanModel();
    }

    // List Peminjaman
    public function index()
    {
        $currentPage = $this->request->getVar('page_peminjaman') ? $this->request->getVar('page_peminjaman') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $peminjaman = $this->peminjamanModel->search($keyword);
        } else {
            $peminjaman = $this->peminjamanModel;
        }

        $peminjaman->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Peminjaman',
            'peminjaman'  => $peminjaman->paginate(10, 'peminjaman'),
            'pager'       => $peminjaman->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/umum/peminjaman/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Peminjaman',
        ];

        return view('control/umum/peminjaman/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'peminjam'          => $this->request->getPost('peminjam'),
            'tanggalpinjam'     => $this->request->getPost('tanggalpinjam'),
            'tanggalkembali'    => $this->request->getPost('tanggalkembali'),
            'haripinjam'        => $this->request->getPost('haripinjam'),
            'harikembali'       => $this->request->getPost('harikembali'),
            'barang'            => $this->request->getPost('barang'),
            'pendapatan'        => $this->request->getPost('pendapatan'),
            'keterangan'        => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('peminjam'),
            'value'     => json_encode($input),
        ];

        $this->peminjamanModel->insert($data);
        session()->setFlashdata('pesan', 'Data Peminjaman Berhasil Ditambahkan!');

        return redirect('control/peminjaman');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'        => 'Rapma FM | Edit Data Peminjaman',
            'peminjaman'   => $this->peminjamanModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('peminjaman');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['peminjaman'] = $query->getResultArray();

        return view('control/umum/peminjaman/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'peminjam'          => $this->request->getPost('peminjam'),
            'tanggalpinjam'     => $this->request->getPost('tanggalpinjam'),
            'tanggalkembali'    => $this->request->getPost('tanggalkembali'),
            'haripinjam'        => $this->request->getPost('haripinjam'),
            'harikembali'       => $this->request->getPost('harikembali'),
            'barang'            => $this->request->getPost('barang'),
            'pendapatan'        => $this->request->getPost('pendapatan'),
            'keterangan'        => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('peminjam'),
            'value'     => json_encode($input),
        ];

        $this->peminjamanModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Peminjaman Berhasil Diubah!');

        return redirect('control/peminjaman');
    }

    // Delete Data
    public function delete($id)
    {
        $this->peminjamanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Peminjaman Berhasil Dihapus!');

        return redirect('control/peminjaman');
    }
}
