<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Sentinel;
use Activation;
use Mail;
class RegisterController extends Controller
{
    public function register()
    {
        return view('back.member.inscription1');
    }
    public function save(Request $request)
    {
        $this->validate($request, [
                'prenom' => 'required|min:3|max:50',
                'nom' => 'required|min:2|max:35',
                'email' => 'required|email|unique:users',
                'telephone' => 'required|numeric|unique:users',
                'password' => 'required|min:6|max:20',
                'password_confirmation' => 'required|min:6|max:20|same:password',
            ],
            [
                'prenom.required' => ' Le prenom est obligatoire.',
    			'prenom.min' => ' Le prenom doit avoir plus de 2 caractéres.',
    			'prenom.max' => ' Le prenom ne doit pas dépasser 50 caractéres.',
    			'nom.required' => ' Le nom est obligatoire.',
    			'nom.min' => ' Le nom doit avoir au moins 2 carractére',
                'nom.max' => ' Le nom ne doit pas dépasser 35 charactere',
                'password.min' => ' Le mot de passe doit etre superieur à 6 caractere.',
                'password.max' => ' The last name may not be greater than 35 characters.',
    		]);
        $credentials = $request->input();
        //dd($credentials);
        if ($user = Sentinel::register($credentials)) {
            $activation = Activation::create($user);
            $code = $activation->code;
            $sent = Mail::send('back.email.activation', ['user'=>$user, 'code'=>$code], function ($m) use($user) {
                $m->to($user->email)->subject('Activate Your Account');
            });
            if ($sent === 0) {
                return Redirect::to('register')->withErrors('Failed to send activation email.');
            }
            return Redirect::to('login')->withSuccess('Your accout was successfully created. You might login now.')->with('userId', $user->getUserId());
        }
        //dd($activation);
        return Redirect::to('register')->withInput()->withErrors('Failed to register.');
    }
    public function activation($code){
        dd($code);
    }
}
