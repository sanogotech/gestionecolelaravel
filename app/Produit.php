<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    
   protected $fillable =[
        'reference','codehs','designation','fournisseur_id','marque','garantie','dureegarantie','disponiblestock','couleurprimaire','couleursecondaire','poids',
        'dimension','typemballage','description','image','droitdouane','designation_four','codebar','seuil','souscategorie_id','categorie_id','groupe_id','user_id'
    ];


     public function souscategorie()
    {
        return $this->belongsTo('App\SousCategorie');
    }


 public function categorie()
    {
        return $this->belongsTo('App\Categorie');
        
    }
     public function groupe()
    {
         return $this->belongsTo('App\Groupe');
    }

     public function user()
    {
        return $this->belongsTo('App\User');
    }

   public function utilisers()
    {
        return $this->hasMany('App\Utiliser');   
    }

     public function caracteristiqueproduits()
    {
        return $this->hasMany('App\CaracteristiqueProduit');
    }

  public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }

     public function livrers()
    {
        return $this->hasMany('App\Livrer');
    }

     public function factureproduits()
   {
     return $this->hasMany('App\FactureProduit');
   }

}
