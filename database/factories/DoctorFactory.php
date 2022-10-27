<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $password = bcrypt(fake()->password);
        // $type = ['admin', 'staff', 'doctor'];
        
        // \App\Models\User::create([
        //     'name' => 'dokter2',
        //     'username' => 'dokterdua',
        //     'email' => 'doc2@doc.com',
        //     'type' => 'doctor',
        //     'password' => bcrypt('123'),
        //     'poli_id' => 1,
        //     'speciality_id' => 1
        // ]);
            $id_spec = mt_rand(1,8);
        return [
            'name' => fake()->name,
            'username' => 'dokterdua',
            'email' => 'doc2@doc.com',
            'type' => 'doctor',
            'password' => bcrypt('123'),
            'poli_id' => $id_spec,
            'speciality_id' => $id_spec
        ];
    }
}
