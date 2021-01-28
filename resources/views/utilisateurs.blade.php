@extends('base')

@section('content')
    <h1>Utilisateurs</h1>
    <ul>
        @foreach($utilisateurs as $utilisateur)
        <li> {{ $utilisateur->email }}</li>
        @endforeach
    </ul>
@endsection