<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');

        if ($categoryId) {
            $products = DB::table('products')->where('category_id', $categoryId)->paginate(2);
        } else {
            $products = DB::table('products')->paginate(2);
        }

        $categories = DB::table('categories')->where('status', 'TRUE')->get();
        return view('products.index', ['products' => $products, 'categories' => $categories]);
    }

    public function shopDetails($product_id)
    {
        $product = DB::table('products')->where('id', $product_id)->first();
        $size = DB::table('sizes')->where('product_id', $product_id)->get();
        $productImg = DB::table('product_images')->where('product_id', $product_id)->get();

        return view('products.details', ['product' => $product, 'productImg' => $productImg, 'sizes' => $size]);
    }
}
