<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $pesanModel;
    protected $settingsModel;

    public function __construct()
    {
        $this->pesanModel    = new \App\Models\PesanModel();
        $this->settingsModel = new \App\Models\SettingsModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Rapma FM',
            'settings'  => $this->settingsModel->paginate(5, 'settings'),
        ];

        return view('home/index', $data);
    }

    // Save Data Messages
    public function save()
    {
        $this->pesanModel->save([
            'name'    => $this->request->getVar('name'),
            'email'   => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        ]);

        session()->setFlashdata('pesan', 'Pesan Anda Telan Dikirim! Terima Kasih CampusBrainers!');
        return redirect('index');
    }
}
