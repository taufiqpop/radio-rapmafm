<?php

namespace App\Controllers;

class Rapmafest10 extends BaseController
{
    // RAPMAFEST 10
    public function index()
    {
        $data = [
            'title' => 'Rapma FM | RAPMAFEST 10',
        ];

        return view('home/events/rapmafest10/index', $data);
    }
}
