<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outpatient;
use App\Models\Poli;


class PrjController extends Controller
{
    public function index()
    {
        $jumlah_halaman = Outatient::count() / 10;

        return view('dashboard',[
            'title' => 'Data Pasien',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'jumlah_pasien' => Outpatient::count(),
            'patients' => Outpatient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }
}
