<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class LandingController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();
        return view('landing-page', [
            'title' => 'Landing Page',
            'specialities' => $specialities
        ]);
    }

    public function getDoctors(Speciality $speciality)
    {
        $doctors = User::where('speciality_id', $speciality->id)->get();
        return response()->json($doctors);
    }
}
