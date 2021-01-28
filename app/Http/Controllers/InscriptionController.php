<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'pseudo' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        $utilisateur = Utilisateur::create([
            'pseudo' => request('pseudo'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        if ($utilisateur) {
            return redirect('/home');
        }
    }
}
