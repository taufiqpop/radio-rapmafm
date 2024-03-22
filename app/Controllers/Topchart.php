<?php

namespace App\Controllers;

class Topchart extends BaseController
{
    protected $topchartModel;

    public function __construct()
    {
        $this->topchartModel = new \App\Models\TopChartModel();
    }

    // List Topchart
    public function index()
    {
        $currentPage = $this->request->getVar('page_topchart') ? $this->request->getVar('page_topchart') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $topchart = $this->topchartModel->search($keyword);
        } else {
            $topchart = $this->topchartModel;
        }

        $topchart->orderBy('id', 'DESC');
        $data = [
            'title'       => 'Rapma FM | Top Chart',
            'topchart'    => $topchart->paginate(5, 'topchart'),
            'pager'       => $topchart->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/kepenyiaran/topchart/index', $data);
    }

    // Insert Data
    public function insert($id = '')
    {
        $input = [
            'versi'     => $this->request->getPost('versi'),
            'link'      => $this->request->getPost('link'),
        ];

        $data = [
            'key'       => $this->request->getPost('versi'),
            'value'     => json_encode($input),
        ];

        $this->topchartModel->insert($data);
        session()->setFlashdata('pesan', 'Data Top Chart Berhasil Ditambahkan!');

        return redirect('control/topchart');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Topchart',
            'topchart'  => $this->topchartModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('topchart');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['topchart'] = $query->getResultArray();

        return view('control/kepenyiaran/topchart/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'versi'     => $this->request->getPost('versi'),
            'link'      => $this->request->getPost('link'),
        ];

        $data = [
            'key'       => $this->request->getPost('versi'),
            'value'     => json_encode($input),
        ];

        $this->topchartModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Top Chart Berhasil Diubah!');

        return redirect('control/topchart');
    }

    // Delete Data
    public function delete($id)
    {
        $this->topchartModel->delete($id);
        session()->setFlashdata('pesan', 'Data Top Chart Berhasil Dihapus!');

        return redirect('control/topchart');
    }
}
