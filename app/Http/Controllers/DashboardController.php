<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Poli;

class DashboardController extends Controller
{
    public function index()
    {

        $jumlah_halaman = floor(Patient::count() / 10);
        //masuk dashboard langsung menampilkan data seluruh pasien
        return view('dashboard',[
            'title' => 'Dashboard',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'jumlah_pasien' => Patient::count(),
            'patients' => Patient::all(),
            'polis' => Poli::all()
        ]);
    }
}
