<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('user')->paginate(14);
        return view("admin.invoice.index", compact('invoices'));
    }
    public function detail($id)
    {

        $invoice = Invoice::findOrFail($id);
        return view('admin.invoice.detail', compact('invoice'));
    }

    public function approveOrder($id)
    {
        $invoice = Invoice::find($id);
        if (auth()->user()->role === 'superadmin' && $invoice) {
            $invoice->status = 'đang giao';
            $invoice->save();
        }
        if (auth()->user()->role === 'admin' && $invoice) {
            $invoice->status = 'đang chờ duyệt';
            $invoice->save();

        }
        return redirect()->back();

    }
}
