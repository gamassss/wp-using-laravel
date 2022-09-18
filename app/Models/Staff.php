<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends User
{
    public static function booted()
    {
        static::addGlobalScope('staff', function($builder)
        {
            $builder->where('type', self::class); 
        });
    }
}
