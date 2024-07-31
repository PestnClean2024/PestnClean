<?php

namespace App\Http\Controllers;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use App\Utils\AccessLogger;

class CategoriesArticlesController extends Controller
{
    public function index()
    {
        $categories = CategoryArticle::orderBy('id', 'DESC')->get();
        return view('admin.category_articles.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->getCategoriesArticles();
        return view('admin.category_articles.create', compact('categories'));
    }

    public function getCategoriesArticles()
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
        'title' => 'required|unique:category_articles|max:255',
        'description' => 'required',
        'status' => 'required',
        'category_parent' => 'required' ,
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $category = new CategoryArticle();
    $category->title = $data['title'];
    $category->description = $data['description'];
    $category->status = $data['status'];
    $category->category_parent = $data['category_parent'] ?: null; // Gán giá trị NULL nếu không có

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $path = 'uploads/category_articles/';
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path($path), $imageName);
        $category->image = $imageName;
    }

    $category->save();
    $user = auth()->user()->fullname;
    $user_role = auth()->user()->role;
    AccessLogger::log("{$user}-{$user_role} đã thêm danh mục bài viết {$category->id} thành công");
    return redirect()->route('categoriesArticles.index')->with('success', 'Danh mục bài viết đã được tạo.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = CategoryArticle::findOrFail($id);
        return view('admin.categoriesArticles.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = $this->getCategoriesArticles();
        $category = CategoryArticle::findOrFail($id);
        return view('admin.category_articles.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = CategoryArticle::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|max:255|unique:category_articles,title,' . $category->id,
            'description' => 'required',
            'status' => 'required',
            'category_parent' => 'nullable|exists:category_articles,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'title.required' => 'Yêu cầu nhập tiêu đề',
            'description.required' => 'Yêu cầu nhập mô tả',
            'status.required' => 'Yêu cầu check status',
        ]);

        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->category_parent = $data['category_parent'];

        // Cập nhật hình ảnh nếu có
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'uploads/category_articles/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($path), $imageName);
            $category->image = $imageName;
        }

        $category->save();
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã cập nhật danh mục bài viết {$category->id} thành công");
        return redirect()->route('categoriesArticles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = CategoryArticle::findOrFail($id);

        // Xóa hình ảnh liên quan nếu tồn tại
        if ($category->image) {
            $imagePath = public_path('uploads/category_articles/' . $category->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $category->delete();

        return redirect()->route('categoriesArticles.index')->with('success', 'Danh mục bài viết đã được xóa thành công.');
    }
}
