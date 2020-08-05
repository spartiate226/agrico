<?php

namespace App;

use App\Http\Requests\ProduitRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produit extends Model
{
    protected $fillable=['categorie_id',
                         'nom',
                         'prix',
                         'description',
                         'image'];

    function Image(){
        return $this->hasOne(Image::class);
    }


    function Categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    static function Insert($produitRequest){
        $produit=Produit::create(['categorie_id'=>$produitRequest->categorie_id,
                       'nom'=>$produitRequest->nom,
                       'prix'=>$produitRequest->prix,
                       'description'=>$produitRequest->description,
                       ]);
        Image::create(['produit_id'=>$produit->id,
                       'chemin'=>$produitRequest->image->store('produit_images','public')]);

        return redirect()->route('Produit.create')->with(["reponse"=>'Produit Enregistrer']);
    }


    static function Maj($produit,$request){
        $cat=Produit::find($produit);
        $cat->update(['categorie_id'=>$request->categorie_id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'description'=>$request->description,
        ]);
        return redirect()->route('Produit.edit',[$produit])->with(["reponse"=>'Produit Modifie']);
    }


    static function Supprimer($produit){
        $prod=Produit::find($produit);
        $prod->delete();
        return redirect()->route('Produit.index')->with(["reponse"=>'Produit supprimer']);
    }


    static function Form($params=null){
        return view('admin.produit.form',['produit'=>$params,'categories'=>Categorie::all()]);
    }


    static function Liste(){
        return view('admin.produit.liste',['produits'=>Produit::all()]);
    }
}
