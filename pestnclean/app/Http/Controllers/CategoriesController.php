<?php

namespace App\Http\Controllers;

use App\Utils\AccessLogger;
use Illuminate\Http\Request;
use App\Models\Category;
<<<<<<< HEAD
use app\Utils\AcessLogger;
=======
>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::orderBy('id', 'DESC')->get();
        $categories = $this->getCategories();
        return view('admin.categories.create', compact('categories'));
    }
    public function getCategories()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $listCategory = [];
        Category::recursive($categories, $parent = 0, $level = 1, $listCategory);
        return $listCategory;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $data = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'description' => 'required',
            'status' => 'required',
            'category_parent' => 'required',
        ], [
            'title.required' => 'Yêu cầu nhập tiêu đề',
            'description.required' => 'Yêu cầu nhập mô tả',
            'status.required' => 'Yêu cầu check status',
        ]);

        // Tạo mới danh mục
        $category = new Category();
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->category_parent = $data['category_parent'];

        $get_image = $request->image;
        $path = 'uploads/categories/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $data['image'] = $new_image;

        // Lưu danh mục vào cơ sở dữ liệu
        $category->save();
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã tạo dịch vụ {$category->id} thành công");
        return redirect()->route('categories.index');
<<<<<<< HEAD

        //Log thông báo hành động
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã thêm danh mục thành công");
        return redirect()->back();
=======
>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b
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
        $categories = $this->getCategories();
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Tìm danh mục theo ID
        $category = Category::find($id);

        // Xác thực dữ liệu đầu vào
        $data = $request->validate([
            'title' => 'required|max:255|unique:categories,title,' . $category->id,
            'description' => 'required',
            'status' => 'required',
            'category_parent' => 'required',
        ], [
            'title.required' => 'Yêu cầu nhập tiêu đề',
            'description.required' => 'Yêu cầu nhập mô tả',
            'status.required' => 'Yêu cầu check status',
        ]);

        // Cập nhật thông tin danh mục
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->category_parent = $data['category_parent']; // Cập nhật danh mục cha mới

        // Cập nhật hình ảnh nếu có
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'uploads/categories/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $category->image = $new_image;
        }

        // Lưu các thay đổi
        $category->save();
        //Log thông báo hành động
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã sửa danh mục {$category->id} thành công");
        return redirect()->route('categories.index');
    }

<<<<<<< HEAD
=======

>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Xóa hình ảnh liên quan (nếu cần)
        $imagePath = public_path('uploads/categories/' . $category->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Danh mục đã được xóa thành công.');

    }
}
