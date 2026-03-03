<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert(['titre' => 'Inception', 'pays' => 'USA', 'annee' => 2010, 'duree' => '02:28:00', 'genre' => 'Science Fiction']);
        DB::table('films')->insert(['titre' => 'Parasite', 'pays' => 'South Korea', 'annee' => 2019, 'duree' => '02:12:00', 'genre' => 'Thriller']);
        DB::table('films')->insert(['titre' => 'The Godfather', 'pays' => 'USA', 'annee' => 1972, 'duree' => '02:55:00', 'genre' => 'Crime']);
        
        // Using database default by omitting the column (SQLite compatible)
        DB::table('films')->insert(['titre' => 'Default Year Movie', 'pays' => 'Morocco', 'duree' => '01:30:00', 'genre' => 'Experimental']);
    }
}
