<?php

namespace App;

use App\Http\Requests\CategorieRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Categorie extends Model
{
    protected $fillable=['nom','image'];

    function Produits(){
        return $this->hasMany(Produit::class);
    }


   static function Insert($categorieRequest){
        Categorie::create([
            'nom'=>$categorieRequest->nom,
            'image'=>$categorieRequest->image->store('categorie_images','public')
        ]);
        return redirect()->route('Categorie.create')->with(["reponse"=>'Categorie Enregistree']);
    }



    static function Maj($categorie,$request){
        $cat=Categorie::find($categorie);
        $cat->update([
            'nom'=>$request->nom,
        ]);
        return redirect()->route('Categorie.edit',[$categorie])->with(["reponse"=>'Categorie mis a jour']);
    }



    static function Supprimer($categorie){
        $cat=Categorie::find($categorie);
        $cat->delete();
        return redirect()->route('Categorie.index')->with(["reponse"=>'Categorie supprimee']);
    }



     static function Form($params=null){

        return view('admin.categorie.form',['categorie'=>$params]);
     }



    static function Liste(){
        return view('admin.categorie.liste',['categories'=>Categorie::all()]);
    }
}
