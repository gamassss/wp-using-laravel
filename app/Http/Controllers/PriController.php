<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inpatient;
use App\Models\Poli;

class PriController extends Controller
{
    public function index()
    {
        $jumlah_halaman = floor(Inpatient::count() / 10);

        return view('dashboard',[
            'title' => 'Data Pasien',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'jumlah_pasien' => Inpatient::count(),
            'patients' => Inpatient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }
}
