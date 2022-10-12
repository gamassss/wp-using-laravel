<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;

class Doctor extends User
{
  use HasParent;

  public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     $query->where('name', 'like', '%' . $filters['search'] . '%')
        //             ->orWhere('NIK', 'like', '%' . $filters['search'] . '%')
        //             ->orWhere('alamat', 'like', '%' . $filters['search'] . '%')
        //             ->orWhere('no_tlp', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('username', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

  public function recipes()
  {
    return $this->hasMany(Recipe::class);
  }

  public function poli()
  {
    return $this->belongsTo(Poli::class);
  }

  public function appointments()
  {
    return $this->hasMany(Appointment::class);
  }
}
