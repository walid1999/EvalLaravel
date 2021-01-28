@extends('base')

@section('content')
    
    <div class="carousel-inner">
        <h1>Mon compte</h1>

        <p>Vous êtes bien connecté.</p>

        <a href="/deconnexion" class="button">Déconnexion</a>

    </div>

    <div>
    <section class="contact-form">
        <form class="form-group" action="/inscription" method="post">
        {{ csrf_field() }}

        <p><input type="text" name="pseudo" placeholder="Nouveau pseudo"></p>

        <p><input type="email" name="email" placeholder="Nouvelle email"></p>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Nouveau mot de passe"></p> 
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input type="password" name="password_confirmation" placeholder="Nouveau mot de passe (confirmation)"></p>
        @if ($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif

        <p><input type="submit" value="Modifier mon mot de passe"></p>
        </form>
    </section>
    
    </div>
@endsection