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

    // public function getAccessLog($userId, $activity = null, $startDate = null, $endDate = null, $perPage = 10)
    // {
    //     $accessLogs = Access::with('User')
    //         ->where('user_id', $userId)
    //         ->orderBy('access_at', 'desc');

    //     if ($activity) {
    //         $accessLogs->where('activity', $activity);
    //     }

    //     if ($startDate && $endDate) {
    //         $accessLogs->whereBetween('access_at', [$startDate, $endDate]);
    //     }

    //     $accessLogs = $accessLogs->paginate($perPage);

    //     $accessLogData = $accessLogs->map(function ($accessLog) {
    //         $offlineTime = now()->diffInSeconds($accessLog->access_at);
    //         return [
    //             'id' => $accessLog->id,
    //             'user_id' => $accessLog->user_id,
    //             'user_name' => $accessLog->user->name,
    //             'activity' => $accessLog->activity,
    //             'access_at' => $accessLog->access_at,
    //             'offline_time' => $offlineTime,
    //         ];
    //     });

    //     return $accessLogData;
    // }
}
