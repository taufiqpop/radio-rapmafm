<?php

namespace App\Controllers;

class Newsflash extends BaseController
{
    protected $newsflashModel;

    public function __construct()
    {
        $this->newsflashModel = new \App\Models\NewsflashModel();
    }

    // List Newsflash
    public function index()
    {
        $currentPage = $this->request->getVar('page_newsflash') ? $this->request->getVar('page_newsflash') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $newsflash = $this->newsflashModel->search($keyword);
        } else {
            $newsflash = $this->newsflashModel;
        }

        $newsflash->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Newsflash',
            'newsflash'     => $newsflash->paginate(10, 'newsflash'),
            'pager'         => $newsflash->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/kepenyiaran/newsflash/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Newsflash',
        ];

        return view('control/kepenyiaran/newsflash/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'penulis'    => $this->request->getPost('penulis'),
            'link'       => $this->request->getPost('link'),
            'kendala'    => $this->request->getPost('kendala'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->newsflashModel->insert($data);
        session()->setFlashdata('pesan', 'Data Newsflash Berhasil Ditambahkan!');

        return redirect('control/newsflash');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Newsflash',
            'newsflash'          => $this->newsflashModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['newsflash'] = $query->getResultArray();

        return view('control/kepenyiaran/newsflash/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'judul'      => $this->request->getPost('judul'),
            'hari'       => $this->request->getPost('hari'),
            'tanggal'    => $this->request->getPost('tanggal'),
            'penulis'    => $this->request->getPost('penulis'),
            'link'       => $this->request->getPost('link'),
            'kendala'    => $this->request->getPost('kendala'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->newsflashModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Newsflash Berhasil Diubah!');

        return redirect('control/newsflash');
    }

    // Delete Data
    public function delete($id)
    {
        $this->newsflashModel->delete($id);
        session()->setFlashdata('pesan', 'Data Newsflash Berhasil Dihapus!');

        return redirect('control/newsflash');
    }
}
