<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Infocontroller extends Controller
{
    public function Info()
    {
        return view("info");
    }
}
