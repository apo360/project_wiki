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
        \App\Models\User::factory()->create();

        \App\Models\City::factory()->create();

        \App\Models\provincia::factory()->create(); 

        \App\Models\GrauAcademicos::factory()->create(); 
    }
}
