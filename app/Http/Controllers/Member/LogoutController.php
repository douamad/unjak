<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;


class LogoutController extends Controller
{
    public function logout(){
        Sentinel::logout();
        return redirect('/');
    }
}
