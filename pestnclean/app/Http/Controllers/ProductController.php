<?php

namespace App\Http\Controllers;

use App\Utils\AccessLogger;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Size;
use App\Models\ProductImage;
<<<<<<< HEAD
use app\Utils\AcessLogger;
use App\Http\Controllers\UserController;


=======
>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b
class ProductController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
        $this->middleware('role:supperadmin')->only(['destroy']);
    }
    public function index()
    {
        $products = Product::with('sizes', 'images')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->getCategoriesProduct();
        return view('admin.products.create', compact('categories'));
    }
    public function getCategoriesProduct()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $listCategory = [];
        Category::recursive($categories, $parent = 0, $level = 1, $listCategory);
        return $listCategory;
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        // Validate the request
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'content' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'sizes.*.size' => 'required',
            'sizes.*.quantity' => 'required|numeric',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
        ]);

        // Create the product
        $product = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'content' => $data['content'],
            'status' => $user->role === 'superadmin' ? 'approve' : 'pending',
            'category_id' => $data['category_id'],
        ]);

        // Handle the main image upload
        if ($request->hasFile('main_image')) {
            $image = $request->file('main_image');
            $path = 'uploads/products/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($path), $imageName);
            $product->main_image = $imageName;
        }

        // Save sizes
        foreach ($data['sizes'] as $size) {
            Size::create([
                'product_id' => $product->id,
                'size' => $size['size'],
                'quantity' => $size['quantity'],
            ]);
        }

        // Handle product images upload
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $path = 'uploads/products/';
                $image->move(public_path($path), $imageName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imageName,
                ]);
            }
        }

        // Save product after updating image paths
        $product->save();
<<<<<<< HEAD

        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã tạo sản phẩm {$product->id} thành công");
        //Log thông báo hành động
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã thêm sản phẩm thành công");
=======
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã tạo sản phẩm {$product->id} thành công");
>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b
        return redirect()->route('products.index');
    }

    
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = $this->getCategoriesProduct(); // Hoặc lọc danh mục theo nhu cầu
        $sizes = Size::where('product_id', $id)->get();
        $productImages = ProductImage::where('product_id', $id)->get();
        $categories = $this->getCategoriesProduct();
        return view('admin.products.edit', compact('product', 'categories', 'sizes', 'productImages'));
    }

    public function updatePrice(Request $request, $id)
{
    $user = auth()->user();

    // Đảm bảo chỉ Superadmin mới có thể cập nhật giá
    if ($user->role !== 'superadmin') {
        return redirect()->route('products.index')->withErrors('Bạn không có quyền cập nhật giá sản phẩm.');
    }

    // Xác thực dữ liệu từ request
    $data = $request->validate([
        'price' => 'required|numeric',
    ]);

    // Tìm sản phẩm
    $product = Product::findOrFail($id);

    // Cập nhật giá
    $product->price = $data['price'];
    $product->status = 'pending'; // Đặt trạng thái là chờ duyệt nếu cần
    $product->save();

    // Ghi log hành động
    AccessLogger::log("{$user->fullname}-{$user->role} đã cập nhật giá sản phẩm {$product->id} thành công");
    return redirect()->route('products.index')->with('success', 'Giá sản phẩm đã được cập nhật.');
}

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        
        // Validate the request
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'content' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'sizes.*.size' => 'required',
            'sizes.*.quantity' => 'required|numeric',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Update the product
        $product->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'content' => $data['content'],
            'status' => $data['status'],
            'category_id' => $data['category_id'],
        ]);

        // Handle the main image upload
        if ($request->hasFile('main_image')) {
            $image = $request->file('main_image');
            $path = 'uploads/products/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($path), $imageName);
            $product->main_image = $imageName;
        }

        // Delete existing sizes
        $product->sizes()->delete();

        // Save new sizes
        foreach ($data['sizes'] as $size) {
            Size::create([
                'product_id' => $product->id,
                'size' => $size['size'],
                'quantity' => $size['quantity'],
            ]);
        }

        // Delete existing product images
        $product->images()->delete();

        // Handle product images upload
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $path = 'uploads/products/';
                $image->move(public_path($path), $imageName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imageName,
                ]);
            }
        }

        // Save product after updating image paths
        $product->save();
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã cập nhật sản phẩm {$product->id} thành công");
<<<<<<< HEAD

        //Log thông báo hành động
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã sửa sản phẩm {$product->id} thành công");


=======
>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Find the product
        $user = auth()->user();
        if($user->role !== 'superadmin'){
            return redirect()->route('products.index')->withErrors('Bạn không có quyền xóa sản phẩm');
        }
        $product = Product::findOrFail($id);

        // Delete sizes related to the product
        $product->sizes()->delete();

        // Delete product images related to the product
        $productImages = $product->images();
        foreach ($productImages as $image) {
            $imagePath = public_path('uploads/products/' . $image->image_path);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete image file from storage
            }
        }
        $productImages->delete();

        // Delete main image from storage
        if ($product->main_image) {
            $mainImagePath = public_path('uploads/products/' . $product->main_image);
            if (file_exists($mainImagePath)) {
                unlink($mainImagePath);
            }
        }

        // Delete the product
        $product->delete();
<<<<<<< HEAD


        //Log thông báo hành động

=======
>>>>>>> ccc90b758f8a1f086d0a11196f3a10d072da866b
        $user = auth()->user()->fullname;
        $user_role = auth()->user()->role;
        AccessLogger::log("{$user}-{$user_role} đã xóa sản phẩm {$product->id} thành công");
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    //Duyệt sản phẩm
    

    //Từ chối sản phẩm
    public function accept($id)
    {
        // Kiểm tra quyền truy cập
        // Tìm sản phẩm theo ID
        $product = Product::findOrFail($id);

        // Cập nhật trạng thái sản phẩm thành 'approved'
        $product->status = 1;
        $product->save();

        // Chuyển hướng và thông báo thành công
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được chấp nhận.');
    }

    // Phương thức để từ chối sản phẩm
    public function reject($id)
    {
        // Kiểm tra quyền truy cập
       

        // Tìm sản phẩm theo ID
        $product = Product::findOrFail($id);

        // Cập nhật trạng thái sản phẩm thành 'rejected'
        $product->status = 2;
        $product->save();

        // Chuyển hướng và thông báo thành công
        return redirect()->route('products.index')->with('error', 'Sản phẩm đã bị từ chối.');
    }

}
