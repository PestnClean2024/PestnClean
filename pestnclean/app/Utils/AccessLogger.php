<?php

namespace App\Utils;

use App\Models\Access;
use Illuminate\Support\Facades\Auth;

class AccessLogger
{
    public static function log($activity)
    {
        if (Auth::check()) {
            Access::create([
                'user_id' => Auth::id(),
                'access_at' => now(),
                'activity' => $activity,
            ]);
        }
        return true;
    }
}
