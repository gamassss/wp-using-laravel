<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'title' => 'Dashboard',
            'patient' => Patient::all()
        ]);
    }
}
