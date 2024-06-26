<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {

        // $etudiants = Etudiant::all();
        $etudiants = Etudiant::orderBy("nom", "asc")->paginate(5);
        // $etudiants = Etudiant::orderBy("nom", "asc")->get();


        return view('etudiant', compact("etudiants"));
    }

    public function create()
    {
        $classes = Classe::all();
        return view('createEtudiant', compact("classes"));
    }
    public function store(Request $request){

        $request->validate([
            "nom" =>"required",
            "prenom" =>"required",
            "classe_id" =>"required"
        ]);
            // pourque le code en bas ne marche il faut definir un fillable dans le model
        // Etudiant::create($request->all());
        Etudiant::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "classe_id" => $request->classe_id
        ]);


        return back()->with("success", "Etudiant ajouté avec succès");
    }
}

