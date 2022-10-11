<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Parental\HasChildren;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasChildren;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'type'
    // ];

    protected $guarded = ['id'];
    
    protected $childTypes = [
        'admin' => Admin::class,
        'doctor' => Doctor::class,
        'staff' => Staff::class
    ];

    protected $attributes = [
        'type' => 'admin'
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';

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
                        ->orWhere('email', 'like', '%' . $search . '%');
                        // ->orWhere('alamat', 'like', '%' . $search . '%')
                        // ->orWhere('no_tlp', 'like', '%' . $search . '%');
        });
    }

    public function patient_details()
    {
        return $this->hasMany(PatientDetail::class);
    }
}
