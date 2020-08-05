<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="token" id="token" content="{{csrf_token()}}">
    <title>Agrico Dashboard</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/css/font-awesome.css')}}" type="text/css">
    <link href="{{asset('css/admin/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin/style-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/jquery.gritter.css')}}" />
</head>

<body>
<section id="container">

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="index.html" class="logo"><b>Agr<span>ico</span></b></a>

        <div class="nav notify-row" id="top_menu">

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li>
                   <form class="d-block  h-100 w-100" action="{{route('logout')}}" method="POST">
                       @csrf
                       <button class="btn btn-danger">Deconnexion</button>
                   </form>
               </li>
            </ul>
        </div>
      </div>
    </header>


    <aside>
        <div id="sidebar" class="nav-collapse ">
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="profile.html"><img src="{{asset('storage/user.png')}}" class="img-circle" width="80"></a></p>
                <h5 class="centered">{{Auth::User()->name}}</h5>
                <li class="mt">
                    <a  href="{{route('Categorie.index')}}">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li class="mt">
                    <a  href="{{route('Produit.index')}}">
                        <i class="fa fa-shopping-bag"></i>
                        <span>Produits</span>
                    </a>
                </li>

                <li class="mt">
                    <a  href="{{route('Admin.create')}}">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <section id="main-content">
        <section class="wrapper">
            @yield('admin-content')
        </section>
    </section>
</section>

      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

      <script class="include" type="text/javascript" src="{{asset('js/admin/jquery.dcjqaccordion.2.7.js')}}"></script>
      <script src="{{asset('js/admin/jquery.scrollTo.min.js')}}"></script>
      <script src="{{asset('js/admin/jquery.nicescroll.js')}}" type="text/javascript"></script>
      <script src="{{asset('js/script.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/admin/common-scripts.js')}}"></script>

</body>

</html>




