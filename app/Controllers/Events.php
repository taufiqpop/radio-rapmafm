<?php

namespace App\Controllers;

class Events extends BaseController
{
    protected $eventsModel;

    public function __construct()
    {
        $this->eventsModel = new \App\Models\EventsModel();
    }

    // List Events
    public function index()
    {
        $currentPage = $this->request->getVar('page_events') ? $this->request->getVar('page_events') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $events = $this->eventsModel->search($keyword);
        } else {
            $events = $this->eventsModel;
        }

        $events->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Events',
            'events'      => $events->paginate(10, 'events'),
            'pager'       => $events->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/events/index', $data);
    }

    // Detail Events
    public function detail($id)
    {
        $data = [
            'title'  => 'Rapma FM | Detail Events',
            'events' => $this->eventsModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('events');
        $builder->select('id, key, value');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['events'] = $query->getResultArray();

        return view('control/events/detail', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'      => 'Rapma FM | Form Events',
            'validation' => \Config\Services::validation()
        ];

        return view('control/events/form', $data);
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
            return redirect()->to('control/events/form')->withInput()->with('validation', $validation);
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
            $ambilGambar->move('img/events', $namaGambar);
        }

        $input = [
            'nama'      => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jenis'     => $this->request->getPost('jenis'),
            'tahun'     => $this->request->getPost('tahun'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->eventsModel->insert($data);
        session()->setFlashdata('pesan', 'Data Events Berhasil Ditambahkan!');

        return redirect('control/events');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'      => 'Rapma FM | Edit Data Events',
            'events'     => $this->eventsModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('events');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['events'] = $query->getResultArray();

        return view('control/events/edit', $data);
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
            return redirect()->to('control/events/edit')->withInput()->with('validation', $validation);
        }

        $ambilGambar = $this->request->getFile('images');

        // Cek Gambar, Apakah Tetap Gambar Lama
        if ($ambilGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('imgLama');
        } else {
            // Generate Nama File Random
            $namaGambar = $ambilGambar->getRandomName();

            // Pindahkan Gambar
            $ambilGambar->move('img/events', $namaGambar);

            // Hapus File Yang Lama
            unlink('img/events/' . $this->request->getVar('imgLama'));
        }

        $input = [
            'nama'      => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jenis'     => $this->request->getPost('jenis'),
            'tahun'     => $this->request->getPost('tahun'),
            'link'      => $this->request->getPost('link'),
            'images'    => $namaGambar,
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->eventsModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Events Berhasil Diubah!');

        return redirect('control/events');
    }

    // Delete Data
    public function delete($id)
    {
        // Cari Gambar Berdasarkan ID
        $events = $this->eventsModel->find($id);
        $eventsJSON = json_decode($events['value']);

        // Hapus Gambar Permanen
        unlink('img/events/' . $eventsJSON->images);

        $this->eventsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Events Berhasil Dihapus!');

        return redirect('control/events');
    }
}
