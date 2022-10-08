<?php

namespace App\Exports;

use App\Models\Inpatient;
use Maatwebsite\Excel\Concerns\FromCollection;

class InpatientExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inpatient::all();
    }
}
