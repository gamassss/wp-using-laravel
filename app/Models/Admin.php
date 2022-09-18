<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    public static function booted()
    {
        static::addGlobalScope('admin', function($builder)
        {
            $builder->where('type', self::class); 
        });
    }
}
