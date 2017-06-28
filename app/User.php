<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'nom',
        'prenom',
        'permissions',
        'civilite',
        'nationalite',
        'adresse',
        'telephone',
        'autre_numero',
        'skype',
        'situation',
        'domaine',
        'pays',
        'region',
        'ville',
        'bio',
        'objectif',
        'attente',
        'contribution',
        'approche',
        'contact_prefere',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
