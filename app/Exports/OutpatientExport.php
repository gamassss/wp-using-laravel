<?php

namespace App\Exports;

use App\Models\Outpatient;
use Maatwebsite\Excel\Concerns\FromCollection;

class OutpatientExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outpatient::all();
    }
}
