<?php

namespace App\Controllers;

class Rapmafest8 extends BaseController
{
    // RAPMAFEST 8
    public function index()
    {
        $data = [
            'title' => 'Rapma FM | RAPMAFEST 8',
        ];

        return view('home/events/rapmafest8/index', $data);
    }
}
