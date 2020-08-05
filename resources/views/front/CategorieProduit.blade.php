@extends('front.socle')
@section('front-content')

    <section class="breadcrumb-section set-bg" data-setbg="{{asset('storage/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2></h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Accueil</a>
                            <a href="{{route('CategorieProd',[getCategorie($categorie_id)->id])}}">{{getCategorie($categorie_id)->nom}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid p-3">
        <div class="row">
            @foreach($produits as $produit)
                @include('layouts.produitLayout')
            @endforeach
        </div>
        <div class="d-flex justify-content-center">{{$produits->links()}}</div>
    </section>
@endsection


