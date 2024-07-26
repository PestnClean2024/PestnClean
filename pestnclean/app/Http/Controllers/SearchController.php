<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->query('keyword', '');
        $keyword = trim(strip_tags($keyword));
        $listsp = [];

        if ($keyword !== "") {
            $keywordLower = strtolower($keyword);
            $listsp = DB::table("products")
                ->where(DB::raw('LOWER(name)'), 'like', "%$keywordLower%")
                ->paginate(1);
        }

        return view('search', ['keyword' => $keyword, 'listsp' => $listsp]);
    }
}
