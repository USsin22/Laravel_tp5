<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acteurs')->insert([
            ['nom' => 'DiCaprio', 'prenom' => 'Leonardo', 'pays' => 'USA', 'date_naissance' => '1974-11-11', 'tel' => '0600000000'],
            ['nom' => 'Song', 'prenom' => 'Kang-ho', 'pays' => 'South Korea', 'date_naissance' => '1967-01-17', 'tel' => null],
            ['nom' => 'Pacino', 'prenom' => 'Al', 'pays' => 'USA', 'date_naissance' => '1940-04-25', 'tel' => null],
        ]);
    }
}
