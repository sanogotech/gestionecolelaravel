<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
     protected $fillable =[
        'matricule','nom','prenom','datenaissance','matiere_id','classe_id','user_id'
    ];


     public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }

     public function evaluers()
   {
     return $this->hasMany('App\Evaluation');
   }
}
