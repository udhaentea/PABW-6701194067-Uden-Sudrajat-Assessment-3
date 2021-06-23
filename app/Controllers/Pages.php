<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Ass3'
        ];
        return view('pages/home', $data);
    }

    public function Jadwal()
    {
        $data = [
            'title' => 'E-Masjid'
        ];
        return view('pages/ass3', $data);
    }
}
