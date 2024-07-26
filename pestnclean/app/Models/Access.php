<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;
    protected $table = "Access";

    public $timestamps = false;

    protected $fillable = ['user_id', 'access_at', 'activity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
