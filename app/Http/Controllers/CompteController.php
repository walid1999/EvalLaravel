<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {

        return view('/mon-compte');

        if (auth()->guest()) {
            return redirect('/connexion')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page.",
            ]);

        }
    }

    public function deconnexion()
    {
    auth()->logout();

    return redirect('/home');
    }

    public function modificationPseudo()
    {
        request()->validate([
            'pseudo' => ['required'],
        ]);
        
        auth()->user()->update([
            'pseudo' => (request('pseudo')),
        ]);

    }

    public function modificationEmail()
    {
        request()->validate([
            'email' => ['required', 'email'],
        ]);
        
        auth()->user()->update([
            'email' => (request('pseudo')),
        ]);
    }


    public function modificationMotDePasse()
    {
    request()->validate([
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
    ]);

    auth()->user()->update([
        'mot_de_passe' => bcrypt(request('password')),
    ]);

    }

}