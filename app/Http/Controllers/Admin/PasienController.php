<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Exports\PatientExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
            'jumlah_pasien' => Patient::count(),
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }

    

    public function pasienExport()
    {
        return Excel::download(new PatientExport, 'pasien.xls');
    }
}
