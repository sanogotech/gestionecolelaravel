<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrire extends Model
{
    
    protected $fillable =[
        'dateinscription','eleve_id','classe_id','annee_id','user_id'
    ];

   public function eleve()
    {
        return $this->belongsTo('App\Eleve');
    }

    public function annee()
    {
        return $this->belongsTo('App\Annee');
    }

    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }

}
