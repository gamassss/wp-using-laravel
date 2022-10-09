<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\User;
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
}
