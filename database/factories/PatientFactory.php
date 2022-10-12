<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['inpatient', 'outpatient'];
        //      $table->id();
        //      $table->string('name');
        //      $table->string('NIK');
        //      $table->string('alamat');
        //      $table->boolean('jenis_kelamin');
        //      $table->string('no_tlp');
        //      $table->string('type')->nullable();
        //      $table->timestamps();
        return [
            'name' => fake()->name(),
            'NIK' => fake()->nik(),
            'alamat' => fake()->address(),
            'jenis_kelamin' => mt_rand(1,2),
            'type' => $type[mt_rand(0,1)],
            'no_tlp' => fake()->phoneNumber(),
            'poli_id' => mt_rand(1,8)
        ];
    }
}
