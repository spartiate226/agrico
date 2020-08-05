@extends('front.socle')
@section('front-content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categories</span>
                        </div>
                        <ul>
                            @foreach(getCategories() as $categorie)
                                <li><a href="{{route('CategorieProd',[$categorie->id])}}">{{$categorie->nom}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{route('Produit_search')}}" method="POST">
                                @csrf
                                <input type="text" placeholder="quel produit cherche vous?" name="q">
                                <button type="submit" class="site-btn">Recherche</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('storage/placeholder.jpeg')}}">
                        <div class="hero__text">
                            <span>Produit d'agriculture d'origine</span>
                            <h2>Produits <br />100% Bio</h2>
                            <p>Faites votre choix</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach(getCategories() as $categorie)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{asset('storage/'.$categorie->image)}}">
                                <h5><a href="{{route('CategorieProd',[$categorie->id])}}">{{$categorie->nom}}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nouveaux produits</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($produits as $produit)
                    @include('layouts.produitLayout')
                @endforeach
            </div>
            <div class="d-flex justify-content-center">{{$produits->links()}}</div>
        </div>
    </section>
@endsection
