<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
     protected $fillable =[
        'matricule','nom','prenom','datenaissance','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function inscrires()
   {
   	 return $this->hasMany('App\Insrire');
   }


   public function evaluers()
   {
     return $this->hasMany('App\Evaluation');
   }

}
