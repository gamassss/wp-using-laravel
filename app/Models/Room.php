<?php

namespace App\Models;

use App\Models\RawatInapDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function rawat_inap_details()
    {
        return $this->hasMany(RawatInapDetail::class);
    }
}
