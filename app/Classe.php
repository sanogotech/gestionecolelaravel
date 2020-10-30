<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
     protected $fillable =[
        'nomclasse','user_id'
    ];


     public function user()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function inscrires()
   {
   	 return $this->hasMany('App\Inscrire');
   }

    public function avoirs()
   {
     return $this->hasMany('App\Avoir');
   }
   
  public function evaluers()
   {
     return $this->hasMany('App\Evaluation');
   }

}
