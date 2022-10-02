<?php

namespace App\Models;

use App\Models\Payment;
use Parental\HasChildren;
use App\Models\PatientDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, HasChildren;

    // protected $fillable = ['name', 'type'];

    protected $guarded = ['id'];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function patient_details()
    {
        return $this->hasMany(PatientDetail::class);
    }
}
