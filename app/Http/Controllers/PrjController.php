<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrjController extends Controller
{
    public function index()
    {
        return view('prj', [
            'title' => 'Pasien Rawat Jalan'
        ]);
    }
}
