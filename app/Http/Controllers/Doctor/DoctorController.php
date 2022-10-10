<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Poli;
use App\Models\Recipe;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        $jumlah_halaman = ceil(Patient::count() / 10);
        $role = explode('\\', Auth::user()->type);
        if (Patient::count() == 0) {
            $jumlah_pasien = 0;
        } else {
            $jumlah_pasien = Patient::count();
        }
        //masuk dashboard langsung menampilkan data seluruh pasien
        return view('dashboard.doctor.index',[
            'title' => 'Dashboard',
            'data' => 'Pasien',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_pasien' => $jumlah_pasien ,
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
            'polis' => Poli::all()
        ]);
    }

    public function appointment()
    {
        $appointment = Appointment::where('doctor_id', Auth::user()->id)->get();
        $jumlah_halaman = ceil($appointment->count() / 10);
        $role = explode('\\', Auth::user()->type);
        if ($appointment->count() == 0) {
            $jumlah_appointment = 0;
        } else {
            $jumlah_appointment = $appointment->count();
        }
        //masuk dashboard langsung menampilkan data seluruh pasien
        return view('dashboard.doctor.index',[
            'title' => 'Dashboard',
            'data' => 'Jadwal Appointment',
            'jml_hal' => $jumlah_halaman,
            'appointments' => Appointment::where('doctor_id', Auth::user()->id)->get(),
            'type' => Auth::user()->type,
            'jumlah_appointment' => $jumlah_appointment
        ]);
    }

    public function resep()
    {
        $recipe = Recipe::where('doctor_id', Auth::user()->id)->get();
        $jumlah_halaman = ceil($recipe->count() / 10);
        $role = explode('\\', Auth::user()->type);
        if ($recipe->count() == 0) {
            $jumlah_recipe = 0;
        } else {
            $jumlah_recipe = $recipe->count();
        }
        //masuk dashboard langsung menampilkan data seluruh pasien
        return view('dashboard.doctor.index',[
            'title' => 'Dashboard',
            'data' => 'Data Resep',
            'jml_hal' => $jumlah_halaman,
            'recipes' => Recipe::where('doctor_id', Auth::user()->id)->get(),
            'type' => Auth::user()->type,
            'jumlah_recipe' => $jumlah_recipe
        ]);
    }
}
