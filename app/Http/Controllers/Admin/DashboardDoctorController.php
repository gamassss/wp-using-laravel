<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_halaman = ceil(Doctor::count() / 10);
        $role = explode('\\', Auth::user()->type);
        if (Doctor::count() == 0) {
            $jumlah_doctor = 0;
        } else {
            $jumlah_doctor = Doctor::count();
        }

        return view('dashboard.admin.doctor',[
            'title' => 'Data Dokter',
            'data' => 'Dokter',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_doctor' => $jumlah_doctor,
            'doctors' => Doctor::latest()->get()
            // ->filter(request(['search']))->paginate(10),
            // 'polis' => Poli::all()
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
