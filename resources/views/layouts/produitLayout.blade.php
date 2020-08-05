<div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
    <div class="featured__item">
        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/'.$produit->Image->chemin)}}">
            <ul class="featured__item__pic__hover">
                <li><a href="{{route('Produit_single',[$produit->id])}}"><i class="fa fa-eye"></i></a></li>
            </ul>
        </div>
        <div class="featured__item__text">
            <h6><a href="{{route('Produit_single',[$produit->id])}}">{{$produit->nom}}</a></h6>
            <h5>{{$produit->prix}} Fcfa</h5>
        </div>
    </div>
</div>
