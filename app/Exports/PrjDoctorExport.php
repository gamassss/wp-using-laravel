<?php

namespace App\Exports;

use App\Models\Outpatient;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class PrjDoctorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outpatient::where('poli_id', Auth::user()->poli_id)->get();
    }
}
