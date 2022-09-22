<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Inpatient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RawatInapDetail extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function inpatient()
    {
        return $this->belongsTo(Inpatient::class);
    }
}
