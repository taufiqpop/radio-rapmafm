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
        ];

        return view('control/podcast/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'judul'         => $this->request->getPost('judul'),
            'bulan'         => $this->request->getPost('bulan'),
            'link'          => $this->request->getPost('link'),
            'talent'        => $this->request->getPost('talent'),
            'narasumber'    => $this->request->getPost('narasumber'),
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
        $input = [
            'judul'         => $this->request->getPost('judul'),
            'bulan'         => $this->request->getPost('bulan'),
            'link'          => $this->request->getPost('link'),
            'talent'        => $this->request->getPost('talent'),
            'narasumber'    => $this->request->getPost('narasumber'),
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
        $this->podcastModel->delete($id);
        session()->setFlashdata('pesan', 'Data Podcast Berhasil Dihapus!');

        return redirect('control/podcast');
    }
}
