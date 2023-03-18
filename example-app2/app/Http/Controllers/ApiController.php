<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;

class ApiController extends Controller
{
    //function create
    public function create(Request $request)
    {
        $etudt =  new etudiant();
        $etudt->email= $request->input('email');
        $etudt->nom= $request->input('nom');
        $etudt->prenom= $request->input('prenom');
        $etudt->save();
        return response()->json($etudt);

    }
    //function affiche
    public function affiche(){
        $etudt = etudiant::all();
        return response()->json($etudt);
    }
    //function affichebyid
    public function affichebyid($id){
        $etudt = etudiant::find($id);
        return response()->json($etudt);
    }
    //function affiche updatebyid
    public function updatebyid(Request $request,$id){
        $etudt = etudiant::find($id);
        $etudt->email= $request->input('email');
        $etudt->nom = $request->input('nom');
        $etudt->prenom = $request->input('prenom');
        $etudt->save();
        return response()->json($etudt);
    }
      // function supprimerbyid
    public function suppbyid(Request $request,$id){
        $etudt = etudiant::find($id);
        $etudt -> delete();
        return response()->json($etudt);
    }
}
