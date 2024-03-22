<?php

namespace App\Controllers;

class News extends BaseController
{
    protected $newsModel;

    public function __construct()
    {
        $this->newsModel = new \App\Models\NewsModel();
    }

    // List Rapma News
    public function index()
    {
        $currentPage = $this->request->getVar('page_news') ? $this->request->getVar('page_news') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $news = $this->newsModel->search($keyword);
        } else {
            $news = $this->newsModel;
        }

        $news->orderBy('tahun', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Rapma News',
            'news'          => $news->paginate(10, 'news'),
            'pager'         => $news->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/kepenyiaran/news/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Rapma News',
        ];

        return view('control/kepenyiaran/news/form', $data);
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
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->newsModel->insert($data);
        session()->setFlashdata('pesan', 'Data Rapma News Berhasil Ditambahkan!');

        return redirect('control/news');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Rapma News',
            'news'          => $this->newsModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('news');
        $builder->select('id, key, value, tahun, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['news'] = $query->getResultArray();

        return view('control/kepenyiaran/news/edit', $data);
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
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->newsModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Rapma News Berhasil Diubah!');

        return redirect('control/news');
    }

    // Delete Data
    public function delete($id)
    {
        $this->newsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Rapma News Berhasil Dihapus!');

        return redirect('control/news');
    }
}
