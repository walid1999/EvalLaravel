<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{

    use BasicAuthenticatable;

    protected $fillable = ['pseudo', 'email', 'mot_de_passe'];

    public function getAuthPassword()

    {
        return $this->mot_de_passe;
    }

    public function getRememberTokenName()
    
    {
        return '';
    }

}