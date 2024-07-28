<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $accessLog = Access::orderBy('id', 'desc')->take(4)->get();
        View::share('accessLog', $accessLog);
    }
}
