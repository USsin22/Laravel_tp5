<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('participations')->insert([
            ['film_id' => 1, 'acteur_id' => 1, 'role' => 'Cobb', 'typeRole' => 'principal'],
            ['film_id' => 2, 'acteur_id' => 2, 'role' => 'Kim Ki-taek', 'typeRole' => 'principal'],
            ['film_id' => 3, 'acteur_id' => 3, 'role' => 'Michael Corleone', 'typeRole' => 'principal'],
        ]);
    }
}
