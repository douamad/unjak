<?php

namespace App\Http\Controllers\Accueil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('back.layouts.master');
    }
}
