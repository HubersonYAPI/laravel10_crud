<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        return view('etudiant.liste');
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement (Request $_request){

        $_request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $_request->nom;
        $etudiant->prenom = $_request->prenom;
        $etudiant->classe = $_request->classe;
        $etudiant->save(); 

        return redirect('/ajouter')->with('status', 'Ajouter avec success');



    }
}
