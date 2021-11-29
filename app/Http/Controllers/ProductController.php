<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $getProduct = Product::all();
        return view('pages.products.index', compact('getProduct'));
    }

    public function destroy($id)
    {
        $product = Product::where('id',$id)->firstOrFail();
        $product->delete();
        return redirect()->back();
    }

    public function create()
    {
        return view('pages.products.create');
    }
}