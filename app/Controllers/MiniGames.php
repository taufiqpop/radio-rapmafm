<?php

namespace App\Controllers;

class MiniGames extends BaseController
{
    protected $minigamesModel;

    public function __construct()
    {
        $this->minigamesModel = new \App\Models\MiniGamesModel();
    }

    // List Mini Games
    public function index()
    {
        $currentPage = $this->request->getVar('page_minigames') ? $this->request->getVar('page_minigames') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $minigames = $this->minigamesModel->search($keyword);
        } else {
            $minigames = $this->minigamesModel;
        }

        $minigames->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Mini Games',
            'minigames'     => $minigames->paginate(5, 'minigames'),
            'pager'         => $minigames->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/umum/minigames/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Mini Games',
            'validation' => \Config\Services::validation()
        ];

        return view('control/umum/minigames/form', $data);
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
            return redirect()->to('control/umum/minigames/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/minigames', $namaGambar);
        }

        $input = [
            'nama'      => $this->request->getPost('nama'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->minigamesModel->insert($data);
        session()->setFlashdata('pesan', 'Data Mini Games Berhasil Ditambahkan!');

        return redirect('control/minigames');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Mini Games',
            'minigames'     => $this->minigamesModel->find($id),
            'validation'    => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('minigames');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['minigames'] = $query->getResultArray();

        return view('control/umum/minigames/edit', $data);
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
            return redirect()->to('control/umum/minigames/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/minigames', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/minigames/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'nama'      => $this->request->getPost('nama'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->minigamesModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Mini Games Berhasil Diubah!');

        return redirect('control/minigames');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $minigames = $this->minigamesModel->find($id);
        $minigamesJSON = json_decode($minigames['value']);

        // Hapus Gambar Permanen
        unlink('img/minigames/' . $minigamesJSON->images);

        $this->minigamesModel->delete($id);
        session()->setFlashdata('pesan', 'Data Mini Games Berhasil Dihapus!');

        return redirect('control/minigames');
    }
}
