@extends('base')

@section('content')

  
<h1 style="text-align: center">Inscription</h1>
<section class="contact-form">
    <form class="form-group" action="/inscription" method="post">
        {{ csrf_field() }}

        
        <p><input type="text" name="pseudo" placeholder="Pseudo"></p>

        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Mot de passe"></p> 
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>
        @if ($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif

        <p><input type="submit" value="M'inscrire"></p>

    </form>
</section>
@endsection