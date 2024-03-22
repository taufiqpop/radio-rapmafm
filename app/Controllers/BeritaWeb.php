<?php

namespace App\Controllers;

class BeritaWeb extends BaseController
{
    protected $beritawebModel;

    public function __construct()
    {
        $this->beritawebModel = new \App\Models\BeritaWebModel();
    }

    // List BeritaWeb
    public function index()
    {
        $currentPage = $this->request->getVar('page_beritaweb') ? $this->request->getVar('page_beritaweb') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $beritaweb = $this->beritawebModel->search($keyword);
        } else {
            $beritaweb = $this->beritawebModel;
        }

        $beritaweb->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Berita Web',
            'beritaweb'     => $beritaweb->paginate(10, 'beritaweb'),
            'pager'         => $beritaweb->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/kepenyiaran/beritaweb/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Berita Web',
            'validation' => \Config\Services::validation()
        ];

        return view('control/kepenyiaran/beritaweb/form', $data);
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
            return redirect()->to('control/kepenyiaran/beritaweb/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/beritaweb', $namaGambar);
        }

        $input = [
            'judul'     => $this->request->getPost('judul'),
            'link'      => $this->request->getPost('link'),
            'hari'      => $this->request->getPost('hari'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->beritawebModel->insert($data);
        session()->setFlashdata('pesan', 'Data Berita Web Berhasil Ditambahkan!');

        return redirect('control/beritaweb');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Berita Web',
            'beritaweb'     => $this->beritawebModel->find($id),
            'validation'    => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('beritaweb');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['beritaweb'] = $query->getResultArray();

        return view('control/kepenyiaran/beritaweb/edit', $data);
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
            return redirect()->to('control/kepenyiaran/beritaweb/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/beritaweb', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/beritaweb/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'judul'     => $this->request->getPost('judul'),
            'link'      => $this->request->getPost('link'),
            'hari'      => $this->request->getPost('hari'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
        ];

        $this->beritawebModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Berita Web Berhasil Diubah!');

        return redirect('control/beritaweb');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $beritaweb = $this->beritawebModel->find($id);
        $beritawebJSON = json_decode($beritaweb['value']);

        // Hapus Gambar Permanen
        unlink('img/beritaweb/' . $beritawebJSON->images);

        $this->beritawebModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berita Web Berhasil Dihapus!');

        return redirect('control/beritaweb');
    }
}
