<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');

        if ($categoryId) {
            $blogs = DB::table('articles')
                ->where('category_id', $categoryId)
                ->where('status', 'TRUE')
                ->paginate(2);
        } else {
            $blogs = DB::table('articles')
                ->where('status', 'TRUE')
                ->paginate(2);
        }

        $categories = DB::table('category_articles')->get();

        return view('blog.index', ['blogs' => $blogs, 'categories' => $categories]);
    }

    public function show($id)
    {
        $blog = DB::table('articles')->find($id);

        if (!$blog) {
            abort(404, 'Blog not found');
        }

        return view('blog.show', ['blog' => $blog]);
    }
}
