<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();
        return view('find-doctor', compact('specialities'));
    }

    public function getDoctors(Speciality $speciality)
    {
        $doctors = User::where('speciality_id', $speciality->id)->get();
        return response()->json($doctors);
    }
}
