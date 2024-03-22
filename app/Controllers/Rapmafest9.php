<?php

namespace App\Controllers;

class Rapmafest9 extends BaseController
{
    // RAPMAFEST 9
    public function index()
    {
        $data = [
            'title' => 'Rapma FM | RAPMAFEST 9',
        ];

        return view('home/events/rapmafest9/index', $data);
    }
}
