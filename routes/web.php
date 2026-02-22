<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Infocontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Profilcontroller;

/* get
   post->ajouter
   put->complete
   delete
   patch->partiel
   */




//layout

Route::get("/",[homeController::class,'Home']);
Route::get("/profile",[Profilcontroller::class,'profil']);
Route::get("/info",[Infocontroller::class,'info']);
//components
Route::get("/component",[homeController::class,'Component']);
Route::get("/prodacts",[ProductController::class,'Home']);
Route::get("/prodacts/{id}",[ProductController::class,'show']);


