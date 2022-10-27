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

    protected $guarded = ['id'];

    protected $childTypes = [
        'inpatient' => Inpatient::class,
        'outpatient' => Outpatient::class
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('NIK', 'like', '%' . $search . '%')
                        ->orWhere('alamat', 'like', '%' . $search . '%')
                        ->orWhere('no_tlp', 'like', '%' . $search . '%');
        });
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // public function patient_details()
    // {
    //     return $this->hasMany(PatientDetail::class);
    // }

    public function poli_details()
    {
        return $this->hasMany(PoliDetail::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, PatientUser::class);
    }

    // public function users()
    // {
    //     return $this->hasManyThrough(User::class, PatientDetail::class);
    // }
}
