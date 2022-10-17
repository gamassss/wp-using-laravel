<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use App\Models\User;
use App\Models\Outpatient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardPrjController extends Controller
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
            $jumlah_pasien = Outpatient::count();
        }

        return view('dashboard.admin.index',[
            'title' => 'Data Pasien',
            'data' => 'Pasien Rawat Jalan',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_pasien' => $jumlah_pasien,
            'patients' => Outpatient::with('users')->latest()->filter(request(['search']))->paginate(10)
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
     * @param  \App\Models\Outpatient  $outpatient
     * @return \Illuminate\Http\Response
     */
    public function show(Outpatient $outpatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outpatient  $outpatient
     * @return \Illuminate\Http\Response
     */
    public function edit(Outpatient $outpatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outpatient  $outpatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outpatient $outpatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outpatient  $outpatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outpatient $outpatient)
    {
        //
    }
}
