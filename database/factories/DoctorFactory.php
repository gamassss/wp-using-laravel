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
        

        return [
            'name' => fake()->name(),
            'username' => fake()->username(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'type' => 'doctor',
            'password' => $password, // password
            'patient_id' => mt_rand(1,100),
            'poli_id' => mt_rand(1,8),
            'remember_token' => Str::random(10),
        ];
    }
}
