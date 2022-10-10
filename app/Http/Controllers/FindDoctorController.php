<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FindDoctorController extends Controller
{
    public function index()
    {
        return view('find-doctor', [
            'title' => 'Book an apppointment',
            'polis' => Poli::all(),
            'doctors' => User::where('type', 'doctor')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'doctor_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required'
        ]);

        Appointment::create($validateData);

        return redirect('/')->with('success', 'Your appointment has been submitted');
    }
}
