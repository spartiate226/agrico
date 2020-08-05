<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__widget">
                        <h6>Contact</h6>
                    </div>
                    <ul>
                        <li>Telephone: +65 11.188.888</li>
                        <li>Email: hello@agric.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Liens utiles</h6>
                    <ul>
                        @foreach(getCategories() as $categorie)
                        <li><a href="{{route('CategorieProd',[$categorie->id])}}">{{$categorie->nom}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Qui sommes nous ?</h6>
                    <p>Entreprise de vente de produits agricoles 100% bio!<i class="fa fa-heart"></i></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
                            Copyright &copy;{{'Copyright '.date('Y')}} Tout droit reserve </p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
