<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profilcontroller extends Controller
{
    public function profil(){
        return view ('profile');
    }
}
