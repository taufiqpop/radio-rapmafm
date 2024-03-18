<?php

namespace App\Controllers;

class Podcast extends BaseController
{
    protected $podcastModel;

    public function __construct()
    {
        $this->podcastModel = new \App\Models\PodcastModel();
    }

    // List Podcast
    public function index()
    {
        $currentPage = $this->request->getVar('page_podcast') ? $this->request->getVar('page_podcast') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $podcast = $this->podcastModel->search($keyword);
        } else {
            $podcast = $this->podcastModel;
        }

        $podcast->orderBy('tahun', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Podcast',
            'podcast'       => $podcast->paginate(10, 'podcast'),
            'pager'         => $podcast->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/podcast/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Podcast',
            'validation' => \Config\Services::validation()
        ];

        return view('control/podcast/form', $data);
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
            return redirect()->to('control/podcast/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/podcast', $namaGambar);
        }

        $input = [
            'judul'         => $this->request->getPost('judul'),
            'hari'          => $this->request->getPost('hari'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'talent'        => $this->request->getPost('talent'),
            'narasumber'    => $this->request->getPost('narasumber'),
            'link'          => $this->request->getPost('link'),
            'images'        => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
            'program'   => $this->request->getPost('program'),
        ];

        $this->podcastModel->insert($data);
        session()->setFlashdata('pesan', 'Data Podcast Berhasil Ditambahkan!');

        return redirect('control/podcast');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Podcast',
            'podcast'       => $this->podcastModel->find($id),
            'validation'    => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, key, value, tahun, program, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('control/podcast/edit', $data);
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
            return redirect()->to('control/podcast/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/podcast', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/podcast/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'judul'         => $this->request->getPost('judul'),
            'hari'          => $this->request->getPost('hari'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'talent'        => $this->request->getPost('talent'),
            'narasumber'    => $this->request->getPost('narasumber'),
            'link'          => $this->request->getPost('link'),
            'images'        => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
            'program'   => $this->request->getPost('program'),
        ];

        $this->podcastModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Podcast Berhasil Diubah!');

        return redirect('control/podcast');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $podcast = $this->podcastModel->find($id);
        $podcastJSON = json_decode($podcast['value']);

        // Hapus Gambar Permanen
        unlink('img/podcast/' . $podcastJSON->images);

        $this->podcastModel->delete($id);
        session()->setFlashdata('pesan', 'Data Podcast Berhasil Dihapus!');

        return redirect('control/podcast');
    }
}
