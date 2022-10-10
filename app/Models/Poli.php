<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function poli_details()
    {
        return $this->hasMany(PoliDetail::class);
    }

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
