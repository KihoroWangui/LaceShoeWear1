<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class Home extends Controller

{
    public function index()
    {
        $categories = Category::all();           
        $featuredProducts = Product::take(6)->get(); 

        return view('home', compact('categories', 'featuredProducts'));
    }
}
