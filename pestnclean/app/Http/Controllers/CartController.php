<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $Cart = DB::table("Cart")->get();
        return view('cart',compact('Cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($user_id,$product_id)
    {

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

        DB::table('Cart')->insert([
            'user_id' => $validatedData['user_id'],
            'product_id' => $validatedData['product_id'],
            'size' => $validatedData['size'],
            'quantity' => $validatedData['quantity'],
        ]);

        return redirect()->route('cart.index', ['user_id' => $validatedData['user_id']])
                         ->with('success', 'Product added to cart successfully!');
    }

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
