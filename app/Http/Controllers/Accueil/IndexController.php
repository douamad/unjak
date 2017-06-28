<?php

namespace App\Http\Controllers\Accueil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Community;
use App\CommunityLink;

class IndexController extends Controller
{
    public function index(){
        $community = Community::find(1)->first();

        return view('front.layouts.master')->with('community', $community);
    }
}
