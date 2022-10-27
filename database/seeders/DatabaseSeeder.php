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
        \App\Models\User::factory(70)->create();
        // \App\Models\Patient::create([
        //     'name' => fake()->name(),
        //     'NIK' => fake()->nik(),
        //     'alamat' => fake()->address(),
        //     'jenis_kelamin' => mt_rand(1,2),
        //     'type' => 'outpatient',
        //     'no_tlp' => fake()->phoneNumber(),
        //     'poli_id' => 1
        // ])->first();

        // \App\Models\PatientUser::create([
        //     'user_id' => 1,
        //     'patient_id' => 1
        // ])->first();

        // \App\Models\Patient::create([
        //     'name' => fake()->name(),
        //     'NIK' => fake()->nik(),
        //     'alamat' => fake()->address(),
        //     'jenis_kelamin' => mt_rand(1,2),
        //     'type' => 'outpatient',
        //     'no_tlp' => fake()->phoneNumber(),
        //     'poli_id' => 1
        // ])->first();

        // \App\Models\PatientUser::create([
        //     'user_id' => 2,
        //     'patient_id' => 2
        // ])->first();

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

        \App\Models\Speciality::create(
            [
                'name' => 'Kandungan'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'Mata'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'Bedah Umum'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'Saraf'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'THT'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'Paru'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'Penyakit Dalam'
            ],
        );

        \App\Models\Speciality::create(
            [
                'name' => 'Jantung'
            ],
        );
    }
}
