<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    
   protected $fillable =[
        'annee','description','user_id'
    ];


     public function user()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function inscrires()
   {
   	 return $this->hasMany('App\Inscrire');
   }

    public function evaluers()
   {
     return $this->hasMany('App\Evaluation');
   }

}
