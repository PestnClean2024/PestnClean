<?php

namespace App\Utils;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class JwtHelper
{
    public static function generateToken($user)
    {
        try {
            $token = JWTAuth::fromUser($user);
            return $token;
        } catch (JWTException $e) {
            Log::error('Không thể tạo mã thông báo: ' . $e->getMessage());
            throw new JWTException('Không thể tạo mã thông báo');
        }
    }

    public static function getUserFromToken($token)
    {
        try {
            $user = JWTAuth::setToken($token)->toUser();
        } catch (JWTException $e) {
            throw new JWTException('Mã thông báo không hợp lệ hoặc đã hết hạn'. $e->getMessage());
        }

        return $user;
    }

    public static function invalidateToken($token)
    {
        try {
            JWTAuth::setToken($token)->invalidate();
        } catch (JWTException $e) {
            throw new JWTException('Không thể vô hiệu hóa mã thông báo');
        }

        return true;
    }
}
