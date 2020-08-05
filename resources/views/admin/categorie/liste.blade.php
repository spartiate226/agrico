@extends('admin.socle')

@section('admin-content')
    <div class="">
        <div class="pl-3 pr-3 pb-1 pt-2">
            <a href="{{route('Categorie.create')}}" class="btn btn-primary">Nouvelle categorie</a>
        </div>
        <div class="pl-3 pr-3 pb-1 pt-1 form-group w-50">
            <input type="text" id="q-cat" data-asset="{{asset('storage')}}" data-edit="{{url('Categorie')}}" class="form-control" placeholder="chercher une categorie" data-catsearch="{{route('search.categorie')}}">
        </div>
        <div class="pl-3 pr-3 pb-1 pt-1">
            {{showResponse()}}
            <table class="table table-light table-striped table-hover">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nom</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody id="catbody">
                @foreach($categories as $categorie)
                    <tr>
                        <td>{{$categorie->id}}</td>
                        <td>{{$categorie->nom}}</td>
                        <td>
                            <a href="{{route('Categorie.edit',[$categorie->id])}}" class="badge badge-success">Modifier</a>
                            <form class="d-inline" action="{{route('Categorie.destroy',[$categorie->id])}}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button class="badge badge-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Nom</th>
                    <th>Option</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
