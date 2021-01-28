@extends('base')

@section('content')
    <h1>Utilisateurs</h1>
    <section>
    <ul >
        @foreach($utilisateurs as $utilisateur)
        <li> 
        <a href="/{{ $utilisateur->email}}">{{ $utilisateur->email }}<br/></a>
        
        </li>
        @endforeach
    </ul>
    </section>
@endsection