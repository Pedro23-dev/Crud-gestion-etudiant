<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("accueil");



Route::get('/etudiant', [EtudiantController::class, "index"])->name("etudiant");
Route::get('/etudiant/create', [EtudiantController::class, "create"])->name("etudiant.create");

Route::post('/etudiant/create', [EtudiantController::class, "store"])->name("etudiant.ajouter");
