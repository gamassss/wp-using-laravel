<?php

namespace App\Models;

use App\Models\Patient;
use Parental\HasParent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Outpatient extends Patient
{
    use HasParent;

        
    public function poli_details()
    {
        return $this->hasMany(PoliDetail::class);
    }
}
