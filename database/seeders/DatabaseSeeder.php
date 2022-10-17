<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Patient::factory(44)->create();
        
        // \App\Models\Doctor::factory(16)->create();
        
        // \App\Models\Outpatient::factory(100)->create();
        \App\Models\Outpatient::factory(10)->create([
            'name' => fake()->name(),
            'NIK' => fake()->nik(),
            'alamat' => fake()->address(),
            'jenis_kelamin' => mt_rand(1,2),
            'type' => 'outpatient',
            'no_tlp' => fake()->phoneNumber(),
            'user_id' => 1,
            'poli_id' => 1
        ])->first();
        // \App\Models\PatientDetail::factory(200)->create();
        \App\Models\PatientDetail::factory()->create([
            'user_id' => 1,
            'patient_id' => mt_rand(1,10)
        ])->first();

        \App\Models\Poli::create(
            [
                'name' => 'Kandungan'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'Mata'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'Bedah Umum'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'Saraf'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'THT'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'Paru'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'Penyakit Dalam'
            ],
        );

        \App\Models\Poli::create(
            [
                'name' => 'Jantung'
            ],
        );
    }
}
