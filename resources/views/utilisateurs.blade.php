@extends('base')

@section('content')
    <h1>Utilisateurs</h1>
    <ul>
        @foreach($utilisateurs as $utilisateur)
        <li> 
        <a href="/{{ $utilisateur->email}}">{{ $utilisateur->email }}</a>
        </li>
        @endforeach
    </ul>
@endsection