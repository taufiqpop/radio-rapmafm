<?php

namespace App\Controllers;

class JadwalSiar extends BaseController
{
    protected $jadwalsiarModel;

    public function __construct()
    {
        $this->jadwalsiarModel = new \App\Models\JadwalSiarModel();
    }

    // List JadwalSiar
    public function index()
    {
        $data = [
            'title'       => 'Rapma FM | Jadwal Siar',
            'jadwalsiar'  => $this->jadwalsiarModel->paginate(1, 'jadwalsiar'),
        ];

        return view('control/jadwalsiar/index', $data);
    }

    // Edit Data
    public function edit($id)
    {
        $data = [
            'title'        => 'Rapma FM | Edit Data Jadwal Siar',
            'jadwalsiar'   => $this->jadwalsiarModel->find($id),
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('jadwalsiar');
        $builder->select('id, key, value, created_at, updated_at, deleted_at');
        $builder->where('id', $id);
        $query   = $builder->get();

        $data['jadwalsiar'] = $query->getResultArray();

        return view('control/jadwalsiar/edit', $data);
    }

    // Update Data
    public function update($id)
    {
        $input = [
            'tglmulai'     => $this->request->getPost('tglmulai'),
            'tglselesai'   => $this->request->getPost('tglselesai'),
            'penyiar1'     => $this->request->getPost('penyiar1'),
            'penyiar2'     => $this->request->getPost('penyiar2'),
            'penyiar3'     => $this->request->getPost('penyiar3'),
            'penyiar4'     => $this->request->getPost('penyiar4'),
            'penyiar5'     => $this->request->getPost('penyiar5'),
            'penyiar6'     => $this->request->getPost('penyiar6'),
            'penyiar7'     => $this->request->getPost('penyiar7'),
            'penyiar8'     => $this->request->getPost('penyiar8'),
            'penyiar9'     => $this->request->getPost('penyiar9'),
            'penyiar10'    => $this->request->getPost('penyiar10'),
            'penyiar11'    => $this->request->getPost('penyiar11'),
            'penyiar12'    => $this->request->getPost('penyiar12'),
            'penyiar13'    => $this->request->getPost('penyiar13'),
            'penyiar14'    => $this->request->getPost('penyiar14'),
            'penyiar15'    => $this->request->getPost('penyiar15'),
            'penyiar16'    => $this->request->getPost('penyiar16'),
            'penyiar17'    => $this->request->getPost('penyiar17'),
            'penyiar18'    => $this->request->getPost('penyiar18'),
            'penyiar19'    => $this->request->getPost('penyiar19'),
            'penyiar20'    => $this->request->getPost('penyiar20'),
            'penyiar21'    => $this->request->getPost('penyiar21'),
            'penyiar22'    => $this->request->getPost('penyiar22'),
            'penyiar23'    => $this->request->getPost('penyiar23'),
            'penyiar24'    => $this->request->getPost('penyiar24'),
            'penyiar25'    => $this->request->getPost('penyiar25'),
            'penyiar26'    => $this->request->getPost('penyiar26'),
            'penyiar27'    => $this->request->getPost('penyiar27'),
            'penyiar28'    => $this->request->getPost('penyiar28'),
            'penyiar29'    => $this->request->getPost('penyiar29'),
            'penyiar30'    => $this->request->getPost('penyiar30'),
            'penyiar31'    => $this->request->getPost('penyiar31'),
            'penyiar32'    => $this->request->getPost('penyiar32'),
            'penyiar33'    => $this->request->getPost('penyiar33'),
            'penyiar34'    => $this->request->getPost('penyiar34'),
            'penyiar35'    => $this->request->getPost('penyiar35'),
            'penyiar36'    => $this->request->getPost('penyiar36'),
            'penyiar37'    => $this->request->getPost('penyiar37'),
            'penyiar38'    => $this->request->getPost('penyiar38'),
            'penyiar39'    => $this->request->getPost('penyiar39'),
            'penyiar40'    => $this->request->getPost('penyiar40'),
            'penyiar41'    => $this->request->getPost('penyiar41'),
            'penyiar42'    => $this->request->getPost('penyiar42'),
            'penyiar43'    => $this->request->getPost('penyiar43'),
            'penyiar44'    => $this->request->getPost('penyiar44'),
            'penyiar45'    => $this->request->getPost('penyiar45'),
            'penyiar46'    => $this->request->getPost('penyiar46'),
            'penyiar47'    => $this->request->getPost('penyiar47'),
            'penyiar48'    => $this->request->getPost('penyiar48'),
            'penyiar49'    => $this->request->getPost('penyiar49'),
            'penyiar50'    => $this->request->getPost('penyiar50'),
            'penyiar51'    => $this->request->getPost('penyiar51'),
            'penyiar52'    => $this->request->getPost('penyiar52'),
            'penyiar53'    => $this->request->getPost('penyiar53'),
            'penyiar54'    => $this->request->getPost('penyiar54'),
            'penyiar55'    => $this->request->getPost('penyiar55'),
            'penyiar56'    => $this->request->getPost('penyiar56'),
            'penyiar57'    => $this->request->getPost('penyiar57'),
            'penyiar58'    => $this->request->getPost('penyiar58'),
            'penyiar59'    => $this->request->getPost('penyiar59'),
            'penyiar60'    => $this->request->getPost('penyiar60'),
            'penyiar61'    => $this->request->getPost('penyiar61'),
            'penyiar62'    => $this->request->getPost('penyiar62'),
            'penyiar63'    => $this->request->getPost('penyiar63'),
            'penyiar64'    => $this->request->getPost('penyiar64'),
            'penyiar65'    => $this->request->getPost('penyiar65'),
            'penyiar66'    => $this->request->getPost('penyiar66'),
            'penyiar67'    => $this->request->getPost('penyiar67'),
            'penyiar68'    => $this->request->getPost('penyiar68'),
            'penyiar69'    => $this->request->getPost('penyiar69'),
            'penyiar70'    => $this->request->getPost('penyiar70'),
            'penyiar71'    => $this->request->getPost('penyiar71'),
            'penyiar72'    => $this->request->getPost('penyiar72'),
            'penyiar73'    => $this->request->getPost('penyiar73'),
            'penyiar74'    => $this->request->getPost('penyiar74'),
            'penyiar75'    => $this->request->getPost('penyiar75'),
            'penyiar76'    => $this->request->getPost('penyiar76'),
            'penyiar77'    => $this->request->getPost('penyiar77'),
            'penyiar78'    => $this->request->getPost('penyiar78'),
            'penyiar79'    => $this->request->getPost('penyiar79'),
            'penyiar80'    => $this->request->getPost('penyiar80'),
            'penyiar81'    => $this->request->getPost('penyiar81'),
            'penyiar82'    => $this->request->getPost('penyiar82'),
            'penyiar83'    => $this->request->getPost('penyiar83'),
            'penyiar84'    => $this->request->getPost('penyiar84'),
            'penyiar85'    => $this->request->getPost('penyiar85'),
            'penyiar86'    => $this->request->getPost('penyiar86'),
            'penyiar87'    => $this->request->getPost('penyiar87'),
            'penyiar88'    => $this->request->getPost('penyiar88'),
            'penyiar89'    => $this->request->getPost('penyiar89'),
            'penyiar90'    => $this->request->getPost('penyiar90'),
            'penyiar91'    => $this->request->getPost('penyiar91'),
            'penyiar92'    => $this->request->getPost('penyiar92'),
            'penyiar93'    => $this->request->getPost('penyiar93'),
            'penyiar94'    => $this->request->getPost('penyiar94'),
            'penyiar95'    => $this->request->getPost('penyiar95'),
            'penyiar96'    => $this->request->getPost('penyiar96'),
        ];

        $data = [
            'key'       => $this->request->getPost('tglmulai'),
            'value'     => json_encode($input),
        ];

        $this->jadwalsiarModel->update($id, $data);
        session()->setFlashdata('pesan', 'Data Jadwal Siar Berhasil Diubah!');

        return redirect('control/jadwalsiar');
    }
}
