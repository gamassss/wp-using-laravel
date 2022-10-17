<?php

namespace App\Models;

use App\Models\Patient;
use Parental\HasParent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Outpatient extends Patient
{
    use HasParent;

    protected $guarded = ['id'];

    public function poli_details()
    {
        return $this->hasMany(PoliDetail::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, PatientDetail::class);
    }

}
