<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GredSeeder;
use Database\Seeders\CampusSeeder;
use Database\Seeders\SubjectSeeder;
use Database\Seeders\ProgrammeSeeder;
use Database\Seeders\ProgrammeRequirementSeeder;

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
        //     'id' => 'FP03589',
        //     'name' => 'Mohammad Azri',
        //     'email' => 'azriperisiben@gapps.kptm.edu.my',
        //     'password' =>  bcrypt('abcd1234')
        // ]);

        $this->call([
            SubjectSeeder::class,
            CampusSeeder::class,
            ProgrammeSeeder::class,
            CampusProgrammeSeeder::class,
            GredSeeder::class,
            ProgrammeRequirementSeeder::class
        ]);

    }
}
