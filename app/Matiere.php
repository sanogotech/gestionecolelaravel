<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
     protected $fillable =[
        'nommatiere','user_id'
    ];

     public function avoirs()
   {
   	 return $this->hasMany('App\Avoir');
   }

    public function enseignants()
   {
   	 return $this->hasMany('App\Enseignant');
   }
   
    public function evaluers()
   {
     return $this->hasMany('App\Evaluation');
   }

   

}
