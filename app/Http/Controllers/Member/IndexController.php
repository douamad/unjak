<?php
/**
 * Created by PhpStorm.
 * User: ext_camara13
 * Date: 23/03/2017
 * Time: 16:26
 */

namespace App\Http\Controllers\Member;


use App\Community;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $community = Community::find(1)->first();
        return view('back.layouts.master')->with('community', $community);
    }
}