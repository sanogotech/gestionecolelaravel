<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avoir extends Model
{
     protected $fillable =[
       'classe_id','matiere_id','user_id'
    ];

    public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }

    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
}
