<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function category(){
        $categories = Category::all();
        return view('admin.view_category', compact('categories'));
    }

    public function add_category(Request $request){
        $cat = new Category();
        $cat->category_name = $request->category_name;
        $cat->save();

        return redirect()->back()->with('message','Category added successfully.');
    }

    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('message', 'Category has been Deleted successfully.');
    }

    public function add_products(){
        $categories = Category::all();
        return view('admin.add_products', compact('categories'));
    }

    public function add_product(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->discount_price = $request->discount_price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category;
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imageName);
        $product->image = $imageName;
        $product->save();
        return redirect()->back()->with('message', 'product added successfully.');
    }

    public function view_products(){
        return view('admin.view_products');
    }
}
