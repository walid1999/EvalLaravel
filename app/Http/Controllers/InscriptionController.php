<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        $utilisateur = App\Utilisateur::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return 'Bonjour'. request('Pseudo');
        return 'Formulaire bien';
    }
}
