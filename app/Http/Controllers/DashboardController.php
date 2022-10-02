<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Poli;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'title' => 'Dashboard',
            'data' => 'Pasien',
            'patients' => Patient::all(),
            'polis' => Poli::all()
        ]);
    }
}
