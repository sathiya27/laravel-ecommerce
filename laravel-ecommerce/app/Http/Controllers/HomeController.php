<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::user()){
            $usertype = Auth::user()->usertype;
        } else {
            $usertype = "0";
        }

        if($usertype=='1'){
            return view('admin.home');
        } else {
            return view('home.userpage');
        }
    }

}
