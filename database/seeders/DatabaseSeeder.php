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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Patient::factory(44)->create();

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
