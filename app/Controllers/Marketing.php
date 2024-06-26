<?php

namespace App\Controllers;

class Marketing extends BaseController
{
    protected $marketingModel;

    public function __construct()
    {
        $this->marketingModel = new \App\Models\MarketingModel();
    }

    // List Marketing
    public function index()
    {
        $currentPage = $this->request->getVar('page_marketing') ? $this->request->getVar('page_marketing') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $marketing = $this->marketingModel->search($keyword);
        } else {
            $marketing = $this->marketingModel;
        }

        $marketing->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Timeline Divisi Marketing',
            'marketing'   => $marketing->paginate(10, 'marketing'),
            'pager'       => $marketing->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/marketing/marketing/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Timeline Divisi Marketing',
        ];

        return view('control/marketing/marketing/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'daritgl'      => $this->request->getPost('daritgl'),
            'sampaitgl'    => $this->request->getPost('sampaitgl'),
            'darihari'     => $this->request->getPost('darihari'),
            'sampaihari'   => $this->request->getPost('sampaihari'),
            'subdivisi'    => $this->request->getPost('subdivisi'),
            'proker'       => $this->request->getPost('proker'),
            'mulaitgl'     => $this->request->getPost('mulaitgl'),
            'selesaitgl'   => $this->request->getPost('selesaitgl'),
            'mulaihari'    => $this->request->getPost('mulaihari'),
            'selesaihari'  => $this->request->getPost('selesaihari'),
            'kendala'      => $this->request->getPost('kendala'),
            'status'       => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('daritgl'),
            'value'     => json_encode($input),
        ];

        $this->marketingModel->insert($data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Marketing Berhasil Ditambahkan!');

        return redirect('control/marketing');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Timeline Divisi Marketing',
            'marketing'      => $this->marketingModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('marketing');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['marketing'] = $query->getResultArray();

        return view('control/marketing/marketing/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'daritgl'      => $this->request->getPost('daritgl'),
            'sampaitgl'    => $this->request->getPost('sampaitgl'),
            'darihari'     => $this->request->getPost('darihari'),
            'sampaihari'   => $this->request->getPost('sampaihari'),
            'subdivisi'    => $this->request->getPost('subdivisi'),
            'proker'       => $this->request->getPost('proker'),
            'mulaitgl'     => $this->request->getPost('mulaitgl'),
            'selesaitgl'   => $this->request->getPost('selesaitgl'),
            'mulaihari'    => $this->request->getPost('mulaihari'),
            'selesaihari'  => $this->request->getPost('selesaihari'),
            'kendala'      => $this->request->getPost('kendala'),
            'status'       => $this->request->getPost('status'),
        ];

        $data = [
            'key'       => $this->request->getPost('daritgl'),
            'value'     => json_encode($input),
        ];

        $this->marketingModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Marketing Berhasil Diubah!');

        return redirect('control/marketing');
    }

    // Delete Data
    public function delete($id)
    {
        $this->marketingModel->delete($id);
        session()->setFlashdata('pesan', 'Data Timeline Divisi Marketing Berhasil Dihapus!');

        return redirect('control/marketing');
    }
}
