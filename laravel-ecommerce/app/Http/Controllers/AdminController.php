<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function category(){
        return view('admin.view_category');
    }

    public function add_category(Request $request){
        $cat = new Category();
        $cat->category_name = $request->category_name;
        $cat->save();

        return redirect()->back()->with('message','Category added successfully.');
    }
}
