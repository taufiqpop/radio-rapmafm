<?php

namespace App\Controllers;

class Achievements extends BaseController
{
    protected $achievementsModel;

    public function __construct()
    {
        $this->achievementsModel = new \App\Models\AchievementsModel();
    }

    // List Achievements
    public function index()
    {
        $currentPage = $this->request->getVar('page_achievements') ? $this->request->getVar('page_achievements') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $achievements = $this->achievementsModel->search($keyword);
        } else {
            $achievements = $this->achievementsModel;
        }

        $achievements->orderBy('tahun', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Achievements',
            'achievements'  => $achievements->paginate(5, 'achievements'),
            'pager'         => $achievements->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/achievements/index', $data);
    }

    // Detail Achievements
    public function detail($id)
    {
        $data = [
            'title'        => 'Rapma FM | Detail Achievements',
            'achievements' => $this->achievementsModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('achievements');
        $builder->select('id, key, value, tahun');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['achievements'] = $query->getResultArray();

        return view('control/achievements/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Achievements',
            'validation' => \Config\Services::validation()
        ];

        return view('control/achievements/form', $data);
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
            return redirect()->to('control/achievements/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/achievements', $namaGambar);
        }

        $input = [
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->achievementsModel->save($data);
        session()->setFlashdata('pesan', 'Data Achievements Berhasil Ditambahkan!');

        return redirect('control/achievements');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Achievements',
            'achievements'  => $this->achievementsModel->find($id),
            'validation'    => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('achievements');
        $builder->select('id, key, value, tahun, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['achievements'] = $query->getResultArray();

        return view('control/achievements/edit', $data);
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
            return redirect()->to('control/achievements/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/achievements', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/achievements/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'id'        => $id,
            'key'       => $this->request->getPost('judul'),
            'value'     => json_encode($input),
            'tahun'     => $this->request->getPost('tahun'),
        ];

        $this->achievementsModel->save($data);
        session()->setFlashdata('pesan', 'Data Achievements Berhasil Diubah!');

        return redirect('control/achievements');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $achievements = $this->achievementsModel->find($id);
        $achievementsJSON = json_decode($achievements['value']);

        // Hapus Gambar Permanen
        unlink('img/achievements/' . $achievementsJSON->images);

        $this->achievementsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Achievements Berhasil Dihapus!');

        return redirect('control/achievements');
    }
}
