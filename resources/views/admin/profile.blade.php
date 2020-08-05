@extends('admin.socle')

@section('admin-content')
    <div class="p-4 m-3 shadow">
        {{showResponse()}}
        <form action="{{route('Admin.update',[Auth::User()->id])}}" method="POST">
            @csrf
            <h3 class="border-bottom">Infos compte</h3>
                <section>
                    <div class="form-group">
                        <label>Nom complet</label>
                        <input class="form-control" type="text" name="name" value="{{Auth::User()->name}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="{{Auth::User()->email}}">
                    </div>
                </section>
            <button class="btn btn-primary">Modifier</button>
        </form>

        <form class="mt-2" action="{{route('Admin.update_password',[Auth::User()->id])}}" method="POST">
            @csrf
            <h3 class="border-bottom">Changer de mot de passe</h3>
                <div class="form-group">
                    <label>Nouveau Mot de passe</label>
                    <input class="form-control cu" type="password" name="password">
                </div>
                <div class="form-group">
                    <label>Confirmer le mot de passe</label>
                    <input class="form-control " type="password" name="password_confirm">
                </div>
            <button class="btn btn-primary">Changer</button>
        </form>
    </div>
@endsection
