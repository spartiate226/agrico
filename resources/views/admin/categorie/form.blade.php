@extends('admin.socle')

@section('admin-content')
<div class="p-4">
    <form class="shadow bg-light p-2" action="@if(isset($categorie)) {{route('Categorie.update',[$categorie->id])}} @else {{route('Categorie.store')}} @endif" method="Post" enctype="multipart/form-data">
            {{showErrors($errors)}}
            {{showResponse()}}
        @csrf
            @if(isset($categorie)) @method('PUT') @endif
        <div class="form-group">
            <label>Nom de la categorie</label>
            <input @if(isset($categorie)) value="{{$categorie->nom}}"@endif class="form-control" type="text" name="nom">
        </div>
        <div @if(isset($categorie)) hidden  @endif   class="form-group">
            <label>Image de la categorie</label>
            <input class="form-control" type="file" name="image">
        </div>
            @if(isset($categorie))
                <div class="form-group">
                    <img src="{{asset('storage/'.$categorie->image)}}" style="height: 250px;width: 250px">
                </div>
            @endif
        <div class="form-group">
            <button class="btn btn-primary">Enregistrer</button>
        </div>

    </form>
</div>
@endsection
