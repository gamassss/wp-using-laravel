<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;

class Doctor extends User
{
  use HasParent;

  public function recipes()
  {
    return $this->hasMany(Recipe::class);
  }

  public function poli()
  {
    return $this->belongsTo(Poli::class);
  }
}
