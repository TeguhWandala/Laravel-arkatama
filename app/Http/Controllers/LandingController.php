<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // mengambil 8 data produk secara acak
        $product = Product::inRandomOrder(8)->get();
        
        // mengambil data category
        $category = Category::all();
        
        // mengambil data slider
        $slider = Slider::all();

        return view('landing', compact('product', 'category', 'slider'));
    }
}