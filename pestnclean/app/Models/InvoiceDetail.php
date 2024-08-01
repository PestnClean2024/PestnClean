<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $table = "InvoiceDetail";

    protected $fillable = ['invoice_id', 'product_id', 'quantity', 'payment_method'];
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(User::class, 'product_id');
    }
}
