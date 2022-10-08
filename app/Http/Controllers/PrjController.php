<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outpatient;
use App\Models\Poli;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OutpatientExport;

class PrjController extends Controller
{
    public function index()
    {
        $jumlah_halaman = ceil(Outpatient::count() / 10);
        $role = explode('\\', Auth::user()->type);

        return view('dashboard.index',[
            'title' => 'Data Pasien',
            'data' => 'Pasien Rawat Jalan',
            'jml_hal' => $jumlah_halaman,
            'type' => $role[2],
            'jumlah_pasien' => Outpatient::count(),
            'patients' => Outpatient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }

    public function pasienExport()
    {
        return Excel::download(new OutpatientExport, 'pasien-rawat-jalan.xls');
    }
}
