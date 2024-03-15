<?php

namespace App\Controllers;

class Structure extends BaseController
{
    protected $structureModel;
    protected $memberModel;

    public function __construct()
    {
        $this->structureModel   = new \App\Models\StructureModel();
        $this->memberModel      = new \App\Models\MemberModel();
    }

    // List Structure
    public function index()
    {
        $currentPage = $this->request->getVar('page_structure') ? $this->request->getVar('page_structure') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $structure = $this->structureModel->search($keyword);
        } else {
            $structure = $this->structureModel;
        }

        $structure->orderBy('id', 'ASC');

        $data = [
            'title'       => 'Rapma FM | Structure',
            'structure'   => $structure->paginate(5, 'structure'),
            'pager'       => $structure->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/structure/index', $data);
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'RSUI YAKKSI | Edit Data Structure',
            'structure'  => $this->structureModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('structure');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['structure'] = $query->getResultArray();

        return view('control/structure/edit', $data);
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
            return redirect()->to('control/structure/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/structure', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/structure/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'divisi'    => $this->request->getPost('divisi'),
            'tahun'     => $this->request->getPost('tahun'),
            'status'    => $this->request->getPost('status'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('divisi'),
            'value'     => json_encode($input),
        ];

        $this->structureModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Structure Berhasil Diubah!');

        return redirect('control/structure');
    }

    // Edit Gambar Crew
    public function member()
    {
        $data = [
            'title'      => 'Rapma FM | Edit Data Crew ',
            'member'     => $this->memberModel->paginate(1, 'member'),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('member');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $query   = $builder->get();

        $data['member'] = $query->getResultArray();

        return view('control/structure/member', $data);
    }

    // Update Gambar Crew
    public function new($id)
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
            return redirect()->to('control/structure/member')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/structure', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/structure/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'divisi'    => $this->request->getPost('divisi'),
            'tahun'     => $this->request->getPost('tahun'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('divisi'),
            'value'     => json_encode($input),
        ];

        $this->memberModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Crew Berhasil Diubah!');

        return redirect('control/structure/member');
    }
}
