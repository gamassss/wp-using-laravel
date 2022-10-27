<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $password = bcrypt(fake()->password);
        $type = ['admin', 'staff', 'doctor'];
        
        // 'name' => fake()->name,
        //     'username' => 'dokterdua',
        //     'email' => 'doc2@doc.com',
        //     'type' => 'doctor',
        //     'password' => bcrypt('123'),
        //     'poli_id' => $id_spec,
        //     'speciality_id' => $id_spec
        $id_spec = mt_rand(1,8);

        return [
            'name' => fake()->name(),
            'username' => fake()->username(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'type' => 'doctor',
            'password' => bcrypt('123'),
            'poli_id' => $id_spec,
            'speciality_id' => $id_spec
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
