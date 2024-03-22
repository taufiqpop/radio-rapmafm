<?php

namespace App\Controllers;

class LabelRekaman extends BaseController
{
    protected $labelrekamanModel;

    public function __construct()
    {
        $this->labelrekamanModel = new \App\Models\LabelRekamanModel();
    }

    // List LabelRekaman
    public function index()
    {
        $currentPage = $this->request->getVar('page_labelrekaman') ? $this->request->getVar('page_labelrekaman') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $labelrekaman = $this->labelrekamanModel->search($keyword);
        } else {
            $labelrekaman = $this->labelrekamanModel;
        }

        $labelrekaman->orderBy('id', 'ASC');

        $data = [
            'title'              => 'Rapma FM | Label Rekaman',
            'labelrekaman'       => $labelrekaman->paginate(10, 'labelrekaman'),
            'pager'              => $labelrekaman->pager,
            'currentPage'        => $currentPage,
        ];

        return view('control/kepenyiaran/labelrekaman/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Label Rekaman',
        ];

        return view('control/kepenyiaran/labelrekaman/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'label'     => $this->request->getPost('label'),
            'total'     => $this->request->getPost('total'),
        ];

        $data = [
            'key'       => $this->request->getPost('label'),
            'value'     => json_encode($input),
        ];

        $this->labelrekamanModel->insert($data);
        session()->setFlashdata('pesan', 'Data Label Rekaman Berhasil Ditambahkan!');

        return redirect('control/labelrekaman');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'     => 'Rapma FM | Edit Data Label Rekaman',
            'labelrekaman'   => $this->labelrekamanModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('labelrekaman');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['labelrekaman'] = $query->getResultArray();

        return view('control/kepenyiaran/labelrekaman/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'label'     => $this->request->getPost('label'),
            'total'     => $this->request->getPost('total'),
        ];

        $data = [
            'key'       => $this->request->getPost('label'),
            'value'     => json_encode($input),
        ];

        $this->labelrekamanModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Label Rekaman Berhasil Diubah!');

        return redirect('control/labelrekaman');
    }

    // Delete Data
    public function delete($id)
    {
        $this->labelrekamanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Label Rekaman Berhasil Dihapus!');

        return redirect('control/labelrekaman');
    }
}
