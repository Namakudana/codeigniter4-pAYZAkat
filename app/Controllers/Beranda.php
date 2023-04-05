<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Beranda',
        );

        return view('V_frontend', $data);
    }
}
