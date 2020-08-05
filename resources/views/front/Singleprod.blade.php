@extends('front.socle')
@section('front-content')
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('storage/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{$produit->nom}}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Accueil</a>
                            <a href="{{route('CategorieProd',[$produit->Categorie->id])}}">{{$produit->Categorie->nom}}</a>
                            <span>{{$produit->nom}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large h-100"
                                 src="{{asset('storage/'.$produit->Image->chemin)}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$produit->nom}}</h3>
                        <div class="product__details__price">{{$produit->prix}} fcfa</div>
                        <p>{{$produit->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

