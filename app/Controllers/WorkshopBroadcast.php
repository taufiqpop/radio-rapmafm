<?php

namespace App\Controllers;

class WorkshopBroadcast extends BaseController
{
    protected $workshopbroadcastModel;

    public function __construct()
    {
        $this->workshopbroadcastModel = new \App\Models\WorkshopBroadcastModel();
    }

    // List WorkshopBroadcast
    public function index()
    {
        $currentPage = $this->request->getVar('page_workshopbroadcast') ? $this->request->getVar('page_workshopbroadcast') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $workshopbroadcast = $this->workshopbroadcastModel->search($keyword);
        } else {
            $workshopbroadcast = $this->workshopbroadcastModel;
        }

        $workshopbroadcast->orderBy('id', 'DESC');

        $data = [
            'title'             => 'Rapma FM | Workshop Broadcast',
            'workshopbroadcast' => $workshopbroadcast->paginate(5, 'workshopbroadcast'),
            'pager'             => $workshopbroadcast->pager,
            'currentPage'       => $currentPage,
        ];

        return view('control/personalia/workshopbroadcast/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Workshop Broadcast',
        ];

        return view('control/personalia/workshopbroadcast/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'dari'          => $this->request->getPost('dari'),
            'sampai'        => $this->request->getPost('sampai'),
            'harimulai'     => $this->request->getPost('harimulai'),
            'hariselesai'   => $this->request->getPost('hariselesai'),
            'mulai'         => $this->request->getPost('mulai'),
            'selesai'       => $this->request->getPost('selesai'),
            'materi'        => $this->request->getPost('materi'),
            'pemateri'      => $this->request->getPost('pemateri'),
            'tempat'        => $this->request->getPost('tempat'),
            'status'        => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('dari'),
            'value'     => json_encode($input),
        ];

        $this->workshopbroadcastModel->insert($data);
        session()->setFlashdata('pesan', 'Data Workshop Broadcast Berhasil Ditambahkan!');

        return redirect('control/workshopbroadcast');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'               => 'Rapma FM | Edit Data Workshop Broadcast',
            'workshopbroadcast'   => $this->workshopbroadcastModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('workshopbroadcast');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['workshopbroadcast'] = $query->getResultArray();

        return view('control/personalia/workshopbroadcast/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'dari'          => $this->request->getPost('dari'),
            'sampai'        => $this->request->getPost('sampai'),
            'harimulai'     => $this->request->getPost('harimulai'),
            'hariselesai'   => $this->request->getPost('hariselesai'),
            'mulai'         => $this->request->getPost('mulai'),
            'selesai'       => $this->request->getPost('selesai'),
            'materi'        => $this->request->getPost('materi'),
            'pemateri'      => $this->request->getPost('pemateri'),
            'tempat'        => $this->request->getPost('tempat'),
            'status'        => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('dari'),
            'value'     => json_encode($input),
        ];

        $this->workshopbroadcastModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Workshop Broadcast Berhasil Diubah!');

        return redirect('control/workshopbroadcast');
    }

    // Delete Data
    public function delete($id)
    {
        $this->workshopbroadcastModel->delete($id);
        session()->setFlashdata('pesan', 'Data Workshop Broadcast Berhasil Dihapus!');

        return redirect('control/workshopbroadcast');
    }
}
