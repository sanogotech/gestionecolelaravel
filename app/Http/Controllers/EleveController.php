<?php

namespace App\Http\Controllers;

use App\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.form_eleve");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $matricule=$request->matricule
         $nom=$request->nom;
         $prenom=$request->prenom;
         $datenaissance=$request->datenaissance;
        $user=Auth::user()->name;

         Eleve::firstOrCreate([
                   'matricule'=>$matricule,
                   'nom'=>$nom,
                   'prenom'=>$prenom,
                   'datenaissance'=>$datenaissance
                  'user_id'=>$user
                  ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}
