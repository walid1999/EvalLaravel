<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{

    use BasicAuthenticatable;

    protected $fillable = ['email', 'password'];

    public function getAuthPassword()

    {
        return $this->password;
    }

    public function getRememberTokenName()
    
    {
        return '';
    }

}