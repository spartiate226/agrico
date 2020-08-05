<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * ProduitController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    return Produit::liste();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  Produit::form();
    }

    public function store(ProduitRequest $produitRequest)
    {
        return  Produit::Insert($produitRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($produit)
    {
        return  Produit::form( Produit::find($produit));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($produit)
    {
        return Produit::Form(Produit::find( $produit));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$produit)
    {
        return  Produit::maj($produit,$request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($produit)
    {
        return  Produit::supprimer($produit);
    }

    function  search(Request $request){
        $produits=Produit::query()->where('nom','LIKE',"%{$request->q}%")->get();
        return response()->json(['produits'=>json_encode($produits)]);
    }
}
