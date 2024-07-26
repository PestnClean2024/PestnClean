<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(2);
        return view('products.index', compact('products'));
    }

    public function shopDetails($product_id)
    {
        $product = DB::table('products')->where('id', $product_id)->first();

        $productImg = DB::table('product_images')->where('product_id', $product_id)->get();

        return view('products.details', ['product' => $product, 'productImg' => $productImg]);
    }
}
