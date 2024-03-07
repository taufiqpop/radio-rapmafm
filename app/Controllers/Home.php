<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $settingsModel;

    public function __construct()
    {
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
}
