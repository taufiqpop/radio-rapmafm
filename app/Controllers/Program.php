<?php

namespace App\Controllers;

class Program extends BaseController
{
    protected $programModel;

    public function __construct()
    {
        $this->programModel = new \App\Models\ProgramModel();
    }

    // List Program
    public function index()
    {
        $currentPage = $this->request->getVar('page_program') ? $this->request->getVar('page_program') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $program = $this->programModel->search($keyword);
        } else {
            $program = $this->programModel;
        }

        $program->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Program',
            'program'     => $program->paginate(10, 'program'),
            'pager'       => $program->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/program/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Program',
            'validation' => \Config\Services::validation()
        ];

        return view('control/program/form', $data);
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
            return redirect()->to('control/program/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/program', $namaGambar);
        }

        $input = [
            'program'   => $this->request->getPost('program'),
            'jenis'     => $this->request->getPost('jenis'),
            'filter'    => $this->request->getPost('filter'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('program'),
            'value'     => json_encode($input),
        ];

        $this->programModel->insert($data);
        session()->setFlashdata('pesan', 'Data Program Berhasil Ditambahkan!');

        return redirect('control/program');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'Rapma FM | Edit Data Program',
            'program'    => $this->programModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('program');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['program'] = $query->getResultArray();

        return view('control/program/edit', $data);
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
            return redirect()->to('control/program/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/program', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/program/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'program'   => $this->request->getPost('program'),
            'jenis'     => $this->request->getPost('jenis'),
            'filter'    => $this->request->getPost('filter'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('program'),
            'value'     => json_encode($input),
        ];

        $this->programModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Program Berhasil Diubah!');

        return redirect('control/program');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $program = $this->programModel->find($id);
        $programJSON = json_decode($program['value']);

        // Hapus Gambar Permanen
        unlink('img/program/' . $programJSON->images);

        $this->programModel->delete($id);
        session()->setFlashdata('pesan', 'Data Program Berhasil Dihapus!');

        return redirect('control/program');
    }
}
