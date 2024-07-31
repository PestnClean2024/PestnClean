<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Pagination\Paginator;

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
    $feedbacks = Feedback::where('product_id', $product_id)
                 ->with('user')
                 ->paginate(1);

    return view('products.details', [
        'product' => $product,
        'productImg' => $productImg,
        'sizes' => $size,
        'feedbacks' => $feedbacks
    ]);
}

    public function storeFeedback(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|integer',
            'user_id' => 'required|integer',
            'content' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Feedback::create($validated);

        return redirect()->back()->with('success', 'Feedback added successfully!');
    }
}
