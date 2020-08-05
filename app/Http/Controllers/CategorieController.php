<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\CategorieRequest;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Categorie::liste();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return Categorie::form();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(CategorieRequest $categorieRequest)
    {
        return Categorie::Insert($categorieRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($categorie)
    {
        return Categorie::Form(Categorie::find($categorie));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$categorie)
    {
       return Categorie::maj($categorie,$request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($categorie)
    {
        return Categorie::supprimer($categorie);
    }
    function  search(Request $request){
        $categories=Categorie::query()->where('nom','LIKE',"%{$request->q}%")->get();
        return response()->json(['categories'=>json_encode($categories)]);
    }
}
