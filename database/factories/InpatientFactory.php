<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inpatient>
 */
class InpatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'NIK' => fake()->nik(),
            'alamat' => fake()->address(),
            'jenis_kelamin' => mt_rand(1,2),
            'type' => 'inpatient',
            'no_tlp' => fake()->phoneNumber(),
            'poli_id' => mt_rand(1,8)
        ];
    }
}
