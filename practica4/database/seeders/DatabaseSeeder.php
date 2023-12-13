<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centre;
use App\Models\Professor;
use App\Models\Alumne;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Centre::factory(10)->create();
        Professor::factory(10)->create();
        Alumne::factory(10)->create();
    }
}
