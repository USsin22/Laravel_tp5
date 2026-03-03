<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('home');
});

Route::get('/calculator', function () {
    return view('calculator');
});

// 1️⃣ GET /films
Route::get('/films', function () {
    $films = DB::table('films')->get();
    return view('films.index', ['films' => $films]);
});

// 2️⃣ GET /films/{id}
Route::get('/films/{id}', function ($id) {
    $film = DB::table('films')->where('id', $id)->first();
    
    if (!$film) {
        abort(404, 'Film not found');
    }
    
    return view('films.show', ['film' => $film]);
})->whereNumber('id');

// 3️⃣ GET /films/{id}/acteurs
Route::get('/films/{id}/acteurs', function ($id) {
    $film = DB::table('films')->where('id', $id)->first();
    
    if (!$film) {
        abort(404, 'Film not found');
    }

    $acteurs = DB::table('participations')
        ->join('acteurs', 'participations.acteur_id', '=', 'acteurs.id')
        ->where('participations.film_id', $id)
        ->select('acteurs.nom', 'acteurs.prenom', 'participations.role', 'participations.typeRole')
        ->get();

    return view('films.acteurs', [
        'film' => $film,
        'acteurs' => $acteurs
    ]);
})->whereNumber('id');
