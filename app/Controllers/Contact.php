<?php

namespace App\Controllers;

class Contact extends BaseController
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
            'title'       => 'Rapma FM | Contact',
            'settings'    => $this->settingsModel->paginate(5, 'settings'),
        ];

        return view('home/contact', $data);
    }

    // Save Data
    public function save()
    {
        $this->pesanModel->save([
            'name'    => $this->request->getVar('name'),
            'email'   => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        ]);

        session()->setFlashdata('pesan', 'Pesan Berhasil Dikirim! Terima Kasih!');

        return redirect('contact');
    }
}
