<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriController extends Controller
{
    public function index()
    {
        return view('pri', [
            'title' => 'Pasien Rawat Inap'
        ]);
    }
}
