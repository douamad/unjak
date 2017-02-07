<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
        return view('member.login');
    }

    public function loggingin(Request $request)
    {
        $credentials = [
            'email'    => $request['email'],
            'password' => $request['password'],
        ];
        Sentinel::authenticate($credentials);
        if(Sentinel::check())
        {
            return redirect('/');
        }
        else
        {
            return view('authentication.login')->with('message','Utilisateur ou mot de passe incorecte');
        }
    }
    public function logout()
    {
        Sentinel::logout();
        return redirect('/login');
    }

    public function lostPassword()
    {
        return view('authentication.login');
    }


    public function postLostPassword(Request $request)
    {
        //
    }
}
