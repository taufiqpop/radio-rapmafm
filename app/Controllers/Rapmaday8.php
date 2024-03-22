<?php

namespace App\Controllers;

class Rapmaday8 extends BaseController
{
    // RAPMADAY 8
    public function index()
    {
        $data = [
            'title' => 'Rapma FM | RAPMADAY 8',
        ];

        return view('home/events/rapmaday8/index', $data);
    }
}
