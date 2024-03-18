<?php

namespace App\Controllers;

class Videos extends BaseController
{
    protected $videosModel;

    public function __construct()
    {
        $this->videosModel = new \App\Models\VideosModel();
    }

    // List Videos
    public function index()
    {
        $currentPage = $this->request->getVar('page_videos') ? $this->request->getVar('page_videos') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $videos = $this->videosModel->search($keyword);
        } else {
            $videos = $this->videosModel;
        }

        $videos->orderBy('type', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Audio',
            'videos'      => $videos->paginate(10, 'videos'),
            'pager'       => $videos->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/videos/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Audio',
        ];

        return view('control/videos/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'title'         => $this->request->getPost('title'),
            'tahun'         => $this->request->getPost('tahun'),
            'link'          => $this->request->getPost('link'),
            'keterangan'    => $this->request->getPost('keterangan'),
            'status'        => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('title'),
            'value'     => json_encode($input),
            'type'      => $this->request->getPost('type'),
        ];

        $this->videosModel->insert($data);
        session()->setFlashdata('pesan', 'Data Audio Berhasil Ditambahkan!');

        return redirect('control/videos');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'    => 'Rapma FM | Edit Data Audio',
            'videos'   => $this->videosModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('videos');
        $builder->select('id, key, value, type, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['videos'] = $query->getResultArray();

        return view('control/videos/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'title'         => $this->request->getPost('title'),
            'tahun'         => $this->request->getPost('tahun'),
            'link'          => $this->request->getPost('link'),
            'keterangan'    => $this->request->getPost('keterangan'),
            'status'        => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('title'),
            'value'     => json_encode($input),
            'type'      => $this->request->getPost('type'),
        ];

        $this->videosModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Audio Berhasil Diubah!');

        return redirect('control/videos');
    }

    // Delete Data
    public function delete($id)
    {
        $this->videosModel->delete($id);
        session()->setFlashdata('pesan', 'Data Audio Berhasil Dihapus!');

        return redirect('control/videos');
    }
}
