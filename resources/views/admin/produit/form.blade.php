@extends('admin.socle')

@section('admin-content')
    <div class="p-4">
        <form class="shadow bg-light p-2" enctype="multipart/form-data" action="@if(isset($produit)) {{route('Produit.update',[$produit->id])}} @else {{route('Produit.store')}} @endif" method="Post">
            {{showErrors($errors)}}
            {{showResponse()}}
            @csrf
                @if(isset($produit)) @method('PUT') @endif
            <div class="form-group">
                <label>Nom du produit</label>
                <input class="form-control" type="text" @if(isset($produit)) value="{{$produit->nom}}" @endif name="nom">
            </div>
            <div class="form-group">
                <label>Prix du produit</label>
                <input class="form-control" type="number" @if(isset($produit)) value="{{$produit->prix}}" @endif name="prix">
            </div>
            <div @if(isset($produit)) hidden @endif class="form-group">
                <label>Image du Produit</label>
                <input  class="form-control" type="file" name="image">
            </div>
                @if(isset($produit))
                    <div class="form-group">
                        <img src="{{asset('storage/'.$produit->Image->chemin)}}" style="height: 250px;width: 250px">
                    </div>
                @endif
            <div class="form-group">
                <label>Categorie</label>
                <select class="form-control" name="categorie_id">
                    @foreach($categories as $categorie)
                        <option @if(isset($produit) && $produit->Categorie->nom==$categorie->nom) selected @endif  value="{{$categorie->id}}">{{$categorie->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Description du produit</label>
                <textarea class="form-control" name="description">
                    @if(isset($produit)) {{$produit->description}} @endif
                </textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>

        </form>
    </div>
@endsection
