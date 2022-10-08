<?php

namespace App\Http\Controllers;

use App\Models\Inpatient;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_halaman = ceil(Inpatient::count() / 10);
        $role = explode('\\', Auth::user()->type);
        if (Inpatient::count() == 0) {
            $jumlah_pasien = 0;
        } else {
            $jumlah_pasien = Inpatient::count();
        }

        return view('dashboard.patients.index',[
            'title' => 'Data Pasien',
            'data' => 'Pasien Rawat Inap',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_pasien' => $jumlah_pasien,
            'patients' => Inpatient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
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
     * @param  \App\Models\Inpatient  $inpatient
     * @return \Illuminate\Http\Response
     */
    public function show(Inpatient $inpatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inpatient  $inpatient
     * @return \Illuminate\Http\Response
     */
    public function edit(Inpatient $inpatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inpatient  $inpatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inpatient $inpatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inpatient  $inpatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inpatient $inpatient)
    {
        //
    }
}
