<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inpatient;
use App\Models\Poli;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InpatientExport;

class PriController extends Controller
{
    public function index()
    {
        $jumlah_halaman = ceil(Inpatient::count() / 10);
        $role = explode('\\', Auth::user()->type);

        return view('dashboard.index',[
            'title' => 'Data Pasien',
            'data' => 'Pasien Rawat Inap',
            'jml_hal' => $jumlah_halaman,
            'type' => $role[2],
            'jumlah_pasien' => Inpatient::count(),
            'patients' => Inpatient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }

    public function pasienExport()
    {
        return Excel::download(new InpatientExport, 'pasien-rawat-inap.xls');
    }
}
