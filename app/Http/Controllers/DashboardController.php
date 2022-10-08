<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Poli;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $jumlah_halaman = ceil(Patient::count() / 10);
        $role = explode('\\', Auth::user()->type);
        if (Patient::count() == 0) {
            $jumlah_pasien = 0;
        } else {
            $jumlah_pasien = Patient::count();
        }
        //masuk dashboard langsung menampilkan data seluruh pasien
        return view('dashboard.patients.index',[
            'title' => 'Dashboard',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_pasien' => $jumlah_pasien ,
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }
}
