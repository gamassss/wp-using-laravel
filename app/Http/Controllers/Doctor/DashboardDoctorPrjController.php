<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Poli;
use App\Models\Outpatient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardDoctorPrjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_halaman = ceil(Outpatient::count() / 10);
        $role = explode('\\', Auth::user()->type);
        if (Outpatient::count() == 0) {
            $jumlah_pasien = 0;
        } else {
            $jumlah_pasien = Outpatient::where('poli_id', Auth::user()->poli_id)->count();
        }

        return view('dashboard.doctor.index',[
            'title' => 'Data Pasien',
            'data' => 'Pasien Rawat Jalan',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_pasien' => $jumlah_pasien,
            'outpatients' => Outpatient::latest()->where('poli_id', Auth::user()->poli_id)->filter(request(['search']))->paginate(10),
            'poli' => Poli::where('id', Auth::user()->poli_id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Outpatient $prj)
    {
        return response()->json($prj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Outpatient $prj)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
