<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;

class Staff extends User
{
    use HasParent;

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}
