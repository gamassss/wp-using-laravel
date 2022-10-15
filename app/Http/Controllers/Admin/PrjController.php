<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use App\Models\Outpatient;
use Illuminate\Http\Request;
use App\Exports\PrjDoctorExport;
use App\Exports\OutpatientExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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

    public function pasienPrjExport()
    {
        return Excel::download(new PrjDoctorExport, 'pasien-rawat-jalan.xls');
    }
}
