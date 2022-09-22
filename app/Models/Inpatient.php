<?php

namespace App\Models;

use App\Models\Patient;
use Parental\HasParent;
use App\Models\RawatInapDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inpatient extends Patient
{
    use HasParent;

    public function rawat_inap_details()
    {
        return $this->hasMany(RawatInapDetail::class);
    }
}
