<?php

namespace App\Controllers;

class News extends BaseController
{
    protected $newsModel;

    public function __construct()
    {
        $this->newsModel = new \App\Models\NewsModel();
    }

    // List News
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
            'title'         => 'Rapma FM | News',
            'news'          => $news->paginate(10, 'news'),
            'pager'         => $news->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/news/index', $data);
    }

    // Detail News
    public function detail($id)
    {
        $data = [
            'title' => 'Rapma FM | Detail News',
            'news'  => $this->newsModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('news');
        $builder->select('id, key, value, kategori, tag, tahun');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['news'] = $query->getResultArray();

        return view('control/news/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form News',
            'validation' => \Config\Services::validation()
        ];

        return view('control/news/form', $data);
    }

    // Insert Data
    public function insert()
    {
        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules'  => 'uploaded[images]|max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'uploaded' => 'Pilih Gambar Terlebih Dahulu',
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('control/news/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $ambilGambar = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($ambilGambar->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/news', $namaGambar);
        }

        $input = [
            'judul'     => $this->request->getPost('judul'),
            'hari'      => $this->request->getPost('hari'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'penulis'   => $this->request->getPost('penulis'),
            'link'      => $this->request->getPost('link'),
            'konten'    => $this->request->getPost('konten'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'kategori'  => $this->request->getPost('kategori'),
            'tag'       => $this->request->getPost('tag'),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->newsModel->insert($data);
        session()->setFlashdata('pesan', 'Data News Berhasil Ditambahkan!');

        return redirect('control/news');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data News',
            'news'          => $this->newsModel->find($id),
            'validation'    => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('news');
        $builder->select('id, key, value, kategori, tag, tahun, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['news'] = $query->getResultArray();

        return view('control/news/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in'  => 'Yang Anda Pilih Bukan Gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('control/news/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/news', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/news/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'judul'     => $this->request->getPost('judul'),
            'hari'      => $this->request->getPost('hari'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'penulis'   => $this->request->getPost('penulis'),
            'link'      => $this->request->getPost('link'),
            'konten'    => $this->request->getPost('konten'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'kategori'  => $this->request->getPost('kategori'),
            'tag'       => $this->request->getPost('tag'),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->newsModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data News Berhasil Diubah!');

        return redirect('control/news');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $news = $this->newsModel->find($id);
        $newsJSON = json_decode($news['value']);

        // Hapus Gambar Permanen
        unlink('img/news/' . $newsJSON->images);

        $this->newsModel->delete($id);
        session()->setFlashdata('pesan', 'Data News Berhasil Dihapus!');

        return redirect('control/news');
    }
}
