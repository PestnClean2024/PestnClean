<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "Invoice";

    protected $fillable = ['user_id', 'date', 'total', 'status'];
    public $timestamps = false;
    public function invoiceDetail() {
        return $this->hasMany(InvoiceDetail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
