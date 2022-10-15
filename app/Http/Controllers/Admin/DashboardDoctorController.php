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

        return view('dashboard.admin.index',[
            'title' => 'Data Dokter',
            'data' => 'Dokter',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_doctor' => $jumlah_doctor,
            'doctors' => Doctor::latest()->filter(request(['search']))->paginate(10),
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:16',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required'
        ]);

        Doctor::create($validatedData);

        return redirect('/dashboard/doctor')->with('success', 'New doctor data has been added.');
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
    public function edit(Doctor $doctor)
    {
        return view('dashboard.admin.user-edit', [
            'title' => 'Edit Data Dokter',
            'data' => 'Edit Data Dokter',
            'user' => $doctor,
            'type' => Auth::user()->type,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'max:16',
            'email' => 'required',
            'poli_id' => 'required'
        ]);

        Doctor::where('id', $doctor->id)
                ->update($validatedData);

        return redirect('/dashboard/doctor')->with('success', 'Doctor data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);

        return redirect('/dashboard/doctor')->with('danger', 'The doctor data has been deleted.');
    }
}
