<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
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

    public function add_cart(Product $product, Request $request)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            if($product->discount_price != null){
                $cart->price = $product->discount_price * $request->quantity;
            } else {
                $cart->price = $product->price * $request->quantity;
            }
            $cart->save();
            return redirect()->back()->with('message','Product have been added to the cart.');
        } else {
            return redirect('login')->with('status', 'Please Login to add products to cart');
        }
    }

}
