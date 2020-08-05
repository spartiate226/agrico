@extends('admin.socle')

@section('admin-content')
    <div class="pl-3 pr-3 pb-1 pt-2">
        <a href="{{route('Produit.create')}}" class="btn btn-primary">Nouveau produit</a>
    </div>
    <div class="pl-3 pr-3 pb-1 pt-1 form-group w-50">
        <input type="text" placeholder="chercher un produit" id="q-prod" class="form-control" data-edit="{{url('Produit')}}" data-asset="{{asset('storage')}}" data-prodsearch="{{route('search.produit')}}">
    </div>
    <div class="pl-3 pr-3 pb-1 pt-1">
        {{showResponse()}}
        <table class="table table-light table-striped table-hover" >
            <thead>
            <tr>
                <th>Nº</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Description</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody id="prodbody">
            @foreach($produits as $produit)
            <tr>
                <td>{{$produit->id}}</td>
                <td>{{$produit->nom}}</td>
                <td>{{$produit->prix}}</td>
                <td>@if ($produit->Categorie!=null)
                    {{$produit->Categorie->nom}}
                @endif</td>
                <td>{{$produit->description}}</td>
                <td>
                    <a href="{{route('Produit.edit',[$produit->id])}}" class="badge badge-pill badge-success">Modifier</a>
                    <form class="d-inline" action="{{route('Produit.destroy',[$produit->id])}}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button class="badge badge-pill badge-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Nº</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Description</th>
                <th>Option</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
