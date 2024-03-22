<?php

namespace App\Controllers;

class DendaAdlibs extends BaseController
{
    protected $dendadlibsModel;

    public function __construct()
    {
        $this->dendadlibsModel = new \App\Models\DendaAdlibsModel();
    }

    // List Dendadlibs
    public function index()
    {
        $currentPage = $this->request->getVar('page_dendadlibs') ? $this->request->getVar('page_dendadlibs') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dendadlibs = $this->dendadlibsModel->search($keyword);
        } else {
            $dendadlibs = $this->dendadlibsModel;
        }

        $dendadlibs->orderBy('id', 'DESC');

        $data = [
            'title'       => 'Rapma FM | Denda Adlibs & Spot',
            'dendadlibs'  => $dendadlibs->paginate(10, 'dendadlibs'),
            'pager'       => $dendadlibs->pager,
            'currentPage' => $currentPage,
        ];

        return view('control/marketing/dendadlibs/index', $data);
    }

    // Create Data
    public function form()
    {
        $data = [
            'title'  => 'Rapma FM | Form Denda Adlibs & Spot',
        ];

        return view('control/marketing/dendadlibs/form', $data);
    }

    // Insert Data
    public function insert()
    {
        $input = [
            'nama'          => $this->request->getPost('nama'),
            'acara'         => $this->request->getPost('acara'),
            'program'       => $this->request->getPost('program'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'hari'          => $this->request->getPost('hari'),
            'total'         => $this->request->getPost('total'),
            'keterangan'    => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->dendadlibsModel->insert($data);
        session()->setFlashdata('pesan', 'Data Denda Adlibs & Spot Berhasil Ditambahkan!');

        return redirect('control/dendadlibs');
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'        => 'Rapma FM | Edit Data Denda Adlibs & Spot',
            'dendadlibs'   => $this->dendadlibsModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('dendadlibs');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['dendadlibs'] = $query->getResultArray();

        return view('control/marketing/dendadlibs/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'nama'          => $this->request->getPost('nama'),
            'acara'         => $this->request->getPost('acara'),
            'program'       => $this->request->getPost('program'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'hari'          => $this->request->getPost('hari'),
            'total'         => $this->request->getPost('total'),
            'keterangan'    => $this->request->getPost('keterangan'),
        ];

        $data = [
            'key'       => $this->request->getPost('nama'),
            'value'     => json_encode($input),
        ];

        $this->dendadlibsModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Denda Adlibs & Spot Berhasil Diubah!');

        return redirect('control/dendadlibs');
    }

    // Delete Data
    public function delete($id)
    {
        $this->dendadlibsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Denda Adlibs & Spot Berhasil Dihapus!');

        return redirect('control/dendadlibs');
    }
}
