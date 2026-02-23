<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request)
    
    {
        return view('controller',[
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'langues'=>['php','laravel','javascript']
            
        ]);
    }
    public function blade()
    
    {
        return view('controller-blade',[
            'nom'=>'yassine',
            'prenom'=>'benhadi',
            'langues'=>['php','laravel','javascript'],
            'n1'=>10,
            'n2'=>20
        

        ]);
        //return view('home',compact('nom','prenom','langues'))
    }
    public function Home()
    {
        $users = [
            ["id" => 1, "nom" => "Lidia", "metier" => "owener"],
            ["id" => 2, "nom" => "Sara", "metier" => "Comptable"],
            ["id" => 3, "nom" => "Yassine", "metier" => "Développeur"],
            ["id" => 4, "nom" => "Imane", "metier" => "Designer"],
            ["id" => 5, "nom" => "Omar", "metier" => "Technicien"],
            ["id" => 6, "nom" => "Lina", "metier" => "RH"],
        ];



        return view("welcome", compact('users'));
    }
    public function Component()
    {
        $users = [
            ["id" => 1, "nom" => "Riko", "metier" => "Directeur"],
            ["id" => 2, "nom" => "Sara", "metier" => "Comptable"],
            ["id" => 3, "nom" => "Yassine", "metier" => "Développeur"],
            ["id" => 4, "nom" => "Imane", "metier" => "Designer"],
            ["id" => 5, "nom" => "Omar", "metier" => "Technicien"],
            ["id" => 6, "nom" => "Lina", "metier" => "RH"],
        ];


        return view('components', compact('users'));
    }


}
