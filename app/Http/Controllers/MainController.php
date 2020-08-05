<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function Accueil(){
        return view('front.Accueil',['categories'=>Categorie::all(),'produits'=>Produit::paginate(5)]);
    }


    function CategorieProduit($categorie){
        $produits=Produit::where('categorie_id','=',$categorie)->paginate(5);
        $categorie_id=$categorie;
        return view('front.CategorieProduit',compact('produits','categorie_id'));
    }

    function ProduitSingle($produit){
        return view('front.Singleprod',['produit'=>Produit::find($produit)]);
    }


    function ProduitSearch(Request $request){
        $produits=Produit::query()->where('nom','LIKE',"%{$request->q}%")->orWhere('description','LIKE',"%{$request->q}%")->paginate(5);
        return view('front.Search',compact('produits'));
    }

    function adminlogin(){
        return redirect()->route('login');
    }
}
