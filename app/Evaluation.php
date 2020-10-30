<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
     
      protected $fillable =[
        'typeevaluation','divisionannee','note','coefficient','dateevaluation','eleve_id','enseignant_id','classe_id','matiere_id','anneescolaire_id','user_id'
    ];

 public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }

 public function eleve()
    {
        return $this->belongsTo('App\Eleve');
    }

     public function classe()
    {
        return $this->belongsTo('App\Classe');
    }

     public function enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }

    

}
