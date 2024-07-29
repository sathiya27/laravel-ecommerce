<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;


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
            $products = Product::paginate(6);
            return view('home.userpage', compact('products'));
        }
    }

    public function product_details(Product $product)
    {
        return view('home.product_details', compact('product'));
    }

}
