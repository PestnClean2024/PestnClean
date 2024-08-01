<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\CategoryArticle;
use App\Http\Controllers\CategoriesController;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::orderBy('id', 'DESC')->get();
        return view('admin.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->getArticles();
        return view('admin.articles.create', compact('categories'));
    }

    public function getArticles()
    {
        $categoriesArticles = CategoryArticle::orderBy('id', 'DESC')->get();
        $listCategory = [];
        CategoryArticle::recursive($categoriesArticles, $parent = 0, $level = 1, $listCategory);
        return $listCategory;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'status' => 'required',
            'category_parent' => 'required' ,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $article = new Article();
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->description = $data['description'];
        $article->status = $data['status'];
        $article->category_id = $data['category_parent'] ?: null; // Gán giá trị NULL nếu không có
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'uploads/articles/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($path), $imageName);
            $article->image = $imageName;
        }
    
        $article->save();
        return redirect()->route('articles.create')->with('success', 'Bài viết đã được tạo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        $categories = CategoryArticle::all();
        $listCategory = $this->getArticles();
        return view('admin.articles.edit', compact('article', 'categories','listCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'status' => 'required',
            'category_id' => 'required|exists:category_articles,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $article = Article::findOrFail($id);
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->description = $data['description'];
        $article->status = $data['status'];
        $article->category_id = $data['category_id'];

        if ($request->hasFile('image')) {
            if ($article->image) {
                unlink(public_path('uploads/articles/'.$article->image));
            }
            $image = $request->file('image');
            $path = 'uploads/articles/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($path), $imageName);
            $article->image = $imageName;
        }

        $article->save();
        return redirect()->route('articles.index')->with('success', 'Bài viết đã được cập nhật.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);

        if ($article->image) {
            \Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
