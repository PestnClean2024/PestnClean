<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = User::where('role','customer')->get();
        return view('admin.customers.index', compact('customers'));
    }
    public function lock($id)
    {
        $customer = User::find($id);
        if ($customer && $customer->role == 'customer') {
            $customer->status = 0;
            $customer->save();
            return redirect()->route('customers.index')->with('success', 'Tài khoản đã bị khóa.');
        }
        return redirect()->route('customers.index')->with('error', 'Không tìm thấy khách hàng.');
    }

    public function unlock($id)
    {
        $customer = User::find($id);
        if ($customer && $customer->role == 'customer') {
            $customer->status = 1;
            $customer->save();
            return redirect()->route('customers.index')->with('success', 'Tài khoản đã được mở khóa.');
        }
        return redirect()->route('customers.index')->with('error', 'Không tìm thấy khách hàng.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
