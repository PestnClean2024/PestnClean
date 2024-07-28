<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
{
    $userId = session('user')->id;

    // Fetch cart items ordered by id in descending order
    $cartItems = Cart::where('user_id', $userId)
                     ->with('product')
                     ->orderBy('id', 'desc')
                     ->get();

    // Calculate the total price for each cart item
    $cartItems = $cartItems->map(function ($item) {
        $item->total_price = $item->product->price * $item->quantity;
        return $item;
    });

    return view('cart', compact('cartItems'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create($user_id, $product_id)
    {
        return view('cart.create', compact('user_id', 'product_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'user_id' => 'required|integer',
        'product_id' => 'required|integer',
        'size' => 'required|string|max:255',
        'quantity' => 'required|integer',
    ]);

    // Check available quantity in the sizes table
    $availableQuantity = DB::table('sizes')
                            ->where('product_id', $validatedData['product_id'])
                            ->where('size', $validatedData['size'])
                            ->value('quantity');

    if ($availableQuantity === null || $availableQuantity < $validatedData['quantity']) {
        return redirect()->back()->with('error', 'Insufficient quantity available.');
    }

    $existingCartItem = Cart::where('user_id', $validatedData['user_id'])
                            ->where('product_id', $validatedData['product_id'])
                            ->where('size', $validatedData['size'])
                            ->first();

    if ($existingCartItem) {
        // Check if the total quantity in the cart exceeds the available quantity
        $newQuantity = $existingCartItem->quantity + $validatedData['quantity'];
        if ($newQuantity > $availableQuantity) {
            return redirect()->back()->with('error', 'Insufficient quantity available.');
        }

        $existingCartItem->quantity = $newQuantity;
        $existingCartItem->save();
    } else {
        Cart::create([
            'user_id' => $validatedData['user_id'],
            'product_id' => $validatedData['product_id'],
            'size' => $validatedData['size'],
            'quantity' => $validatedData['quantity'],
        ]);
    }

    return redirect()->route('cart.index')
                     ->with('success', 'Product added to cart successfully!');
}



    // Các phương thức khác..

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $cartItem = Cart::findOrFail($id);

    $action = $request->input('action');

    // Get available quantity in the sizes table
    $availableQuantity = DB::table('sizes')
                            ->where('product_id', $cartItem->product_id)
                            ->where('size', $cartItem->size)
                            ->value('quantity');

    if ($action === 'increase') {
        if ($availableQuantity !== null && $cartItem->quantity + 1 > $availableQuantity) {
            return redirect()->back()->with('error', 'Insufficient quantity available.');
        }
        $cartItem->quantity += 1;
    } elseif ($action === 'decrease') {
        $cartItem->quantity -= 1;

        if ($cartItem->quantity < 1) {
            $cartItem->quantity = 1;
        }
    }

    $cartItem->save();

    return redirect()->route('cart.index')->with('success', 'Quantity updated successfully.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $cartItem = Cart::findOrFail($id);

    $cartItem->delete();

    return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully.');
}
}
