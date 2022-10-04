<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Poli;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function index()
    {   
        $jumlah_halaman = ceil(Patient::count() / 10);
        $role = explode('\\', Auth::user()->type);

        return view('dashboard',[
            'title' => 'Data Pasien',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'type' => $role[2],
            'jumlah_pasien' => Patient::count(),
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }

    public function tambah()
    {
        
    }
}
