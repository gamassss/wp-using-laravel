<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends User
{
    public static function booted()
    {
        static::addGlobalScope('doctor', function($builder)
        {
            $builder->where('type', self::class); 
        });
    }
}
