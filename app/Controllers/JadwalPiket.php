<?php

namespace App\Controllers;

class JadwalPiket extends BaseController
{
    protected $jadwalpiketModel;

    public function __construct()
    {
        $this->jadwalpiketModel = new \App\Models\JadwalPiketModel();
    }

    // List JadwalPiket
    public function index()
    {
        $data = [
            'title'        => 'Rapma FM | Jadwal Piket',
            'jadwalpiket'  => $this->jadwalpiketModel->paginate(1, 'jadwalpiket'),
        ];

        return view('control/jadwalpiket/index', $data);
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'         => 'Rapma FM | Edit Data Jadwal Piket',
            'jadwalpiket'   => $this->jadwalpiketModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('jadwalpiket');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['jadwalpiket'] = $query->getResultArray();

        return view('control/jadwalpiket/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tglmulai'     => $this->request->getPost('tglmulai'),
            'tglselesai'   => $this->request->getPost('tglselesai'),
            'anggota1'     => $this->request->getPost('anggota1'),
            'anggota2'     => $this->request->getPost('anggota2'),
            'anggota3'     => $this->request->getPost('anggota3'),
            'anggota4'     => $this->request->getPost('anggota4'),
            'anggota5'     => $this->request->getPost('anggota5'),
            'anggota6'     => $this->request->getPost('anggota6'),
            'anggota7'     => $this->request->getPost('anggota7'),
            'anggota8'     => $this->request->getPost('anggota8'),
            'anggota9'     => $this->request->getPost('anggota9'),
            'anggota10'    => $this->request->getPost('anggota10'),
            'anggota11'    => $this->request->getPost('anggota11'),
            'anggota12'    => $this->request->getPost('anggota12'),
            'anggota13'    => $this->request->getPost('anggota13'),
            'anggota14'    => $this->request->getPost('anggota14'),
            'anggota15'    => $this->request->getPost('anggota15'),
            'anggota16'    => $this->request->getPost('anggota16'),
            'anggota17'    => $this->request->getPost('anggota17'),
            'anggota18'    => $this->request->getPost('anggota18'),
            'anggota19'    => $this->request->getPost('anggota19'),
            'anggota20'    => $this->request->getPost('anggota20'),
            'anggota21'    => $this->request->getPost('anggota21'),
            'anggota22'    => $this->request->getPost('anggota22'),
            'anggota23'    => $this->request->getPost('anggota23'),
            'anggota24'    => $this->request->getPost('anggota24'),
            'anggota25'    => $this->request->getPost('anggota25'),
            'anggota26'    => $this->request->getPost('anggota26'),
            'anggota27'    => $this->request->getPost('anggota27'),
            'anggota28'    => $this->request->getPost('anggota28'),
            'anggota29'    => $this->request->getPost('anggota29'),
            'anggota30'    => $this->request->getPost('anggota30'),
            'anggota31'    => $this->request->getPost('anggota31'),
            'anggota32'    => $this->request->getPost('anggota32'),
            'anggota33'    => $this->request->getPost('anggota33'),
            'anggota34'    => $this->request->getPost('anggota34'),
            'anggota35'    => $this->request->getPost('anggota35'),
            'anggota36'    => $this->request->getPost('anggota36'),
            'anggota37'    => $this->request->getPost('anggota37'),
            'anggota38'    => $this->request->getPost('anggota38'),
            'anggota39'    => $this->request->getPost('anggota39'),
            'anggota40'    => $this->request->getPost('anggota40'),
            'anggota41'    => $this->request->getPost('anggota41'),
            'anggota42'    => $this->request->getPost('anggota42'),
            'anggota43'    => $this->request->getPost('anggota43'),
            'anggota44'    => $this->request->getPost('anggota44'),
            'anggota45'    => $this->request->getPost('anggota45'),
            'anggota46'    => $this->request->getPost('anggota46'),
            'anggota47'    => $this->request->getPost('anggota47'),
            'anggota48'    => $this->request->getPost('anggota48'),
            'anggota49'    => $this->request->getPost('anggota49'),
            'anggota50'    => $this->request->getPost('anggota50'),
            'anggota51'    => $this->request->getPost('anggota51'),
            'anggota52'    => $this->request->getPost('anggota52'),
            'anggota53'    => $this->request->getPost('anggota53'),
            'anggota54'    => $this->request->getPost('anggota54'),
            'anggota55'    => $this->request->getPost('anggota55'),
            'anggota56'    => $this->request->getPost('anggota56'),
            'anggota57'    => $this->request->getPost('anggota57'),
            'anggota58'    => $this->request->getPost('anggota58'),
            'anggota59'    => $this->request->getPost('anggota59'),
            'anggota60'    => $this->request->getPost('anggota60'),
        ];

        $data = [
            'key'       => $this->request->getPost('tglmulai'),
            'value'     => json_encode($input),
        ];

        $this->jadwalpiketModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Jadwal Piket Berhasil Diubah!');

        return redirect('control/jadwalpiket');
    }
}
