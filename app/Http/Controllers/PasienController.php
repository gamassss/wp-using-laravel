<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Poli;

class PasienController extends Controller
{
    public function index()
    {   
        $jumlah_halaman = Patient::count() / 10;

        return view('dashboard',[
            'title' => 'Data Pasien',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'jumlah_pasien' => Patient::count(),
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }
}
