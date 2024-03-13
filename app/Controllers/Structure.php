<?php

namespace App\Controllers;

class Structure extends BaseController
{
    protected $structureModel;

    public function __construct()
    {
        $this->structureModel = new \App\Models\StructureModel();
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
            'title'         => 'Rapma FM | Structure',
            'structure'     => $structure->paginate(10, 'structure'),
            'pager'         => $structure->pager,
            'currentPage'   => $currentPage,
        ];

        return view('control/structure/index', $data);
    }

    // Detail Structure
    public function detail($id)
    {
        $data = [
            'title' => 'Rapma FM | Detail Structure',
            'structure' => $this->structureModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('structure');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['structure'] = $query->getResultArray();

        return view('control/structure/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Structure',
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('structure');
        $builder->select('id, key, value');
        $query   = $builder->get();

        $data['structure'] = $query->getResultArray();

        return view('control/structure/form', $data);
    }

    // Insert Data
    public function insert($id = '')
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
            return redirect()->to('control/structure/form')->withInput()->with('validation', $validation);
        }

        // Ambil Gambar
        $gambarStructure = $this->request->getFile('images');

        // Apakah Tidak Ada Gambar Yang Diupload
        if ($gambarStructure->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarStructure->getRandomName();

            // Pindahkan Gambar
            $gambarStructure->move('img/structure', $namaGambar);
        }

        $input = [
            'divisi'    => $this->request->getPost('divisi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tahun'     => $this->request->getPost('tahun'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('divisi'),
            'value'     => json_encode($input),
        ];

        $this->structureModel->save($data);
        session()->setFlashdata('pesan', 'Data Structure Berhasil Ditambahkan!');

        return redirect('control/structure');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'RSUI YAKKSI | Edit Data Structure',
            'structure'  => $this->structureModel->find($id),
            'validation'    => \Config\Services::validation()
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

        $gambarStructure = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($gambarStructure->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $gambarStructure->getRandomName();

            // Pindahkan Gambar
            $gambarStructure->move('img/structure', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/structure/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'divisi'    => $this->request->getPost('divisi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tahun'     => $this->request->getPost('tahun'),
            'images'    => $namaGambar,
        ];

        $data = [
            'id'        => $id,
            'key'       => $this->request->getPost('divisi'),
            'value'     => json_encode($input),
        ];

        $this->structureModel->save($data);
        session()->setFlashdata('pesan', 'Data Structure Berhasil Diubah!');

        return redirect('control/structure');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $structure = $this->structureModel->find($id);
        $structureJSON = json_decode($structure['value']);

        // Hapus Gambar Permanen
        unlink('img/structure/' . $structureJSON->images);

        $this->structureModel->delete($id);
        session()->setFlashdata('pesan', 'Data Structure Berhasil Dihapus!');

        return redirect('control/structure');
    }
}
