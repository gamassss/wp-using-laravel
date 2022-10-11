<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_halaman = ceil(Patient::count() / 10);
        $role = explode('\\', Auth::user()->type);
        if (Patient::count() == 0) {
            $jumlah_pasien = 0;
        } else {
            $jumlah_pasien = Patient::count();
        }

        return view('dashboard.admin.index',[
            'title' => 'Data Pasien',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_pasien' => $jumlah_pasien,
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'NIK' => 'required|max:16',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required',
            'type' => 'required',
        ]);

        Patient::create($validatedData);

        return redirect('/dashboard/pasien')->with('success', 'New patient data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $pasien)
    {   
        return view('dashboard.patients.edit', [
            'title' => 'Edit Data Pasien',
            'patient' => $pasien,
            'type' => Auth::user()->type,
            'polis' => Poli::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $pasien)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'NIK' => 'required|max:16',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required',
            'type' => 'required',
        ]);

        Patient::where('id', $pasien->id)
                ->update($validatedData);

        return redirect('/dashboard/pasien')->with('success', 'Patient data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Patient::destroy($patient->id);

        return redirect('/dashboard/pasien')->with('danger', 'The patient data has been deleted.');
    }
}
