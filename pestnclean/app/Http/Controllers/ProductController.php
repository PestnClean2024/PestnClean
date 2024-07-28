<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\ProductImage;
class ProductController extends Controller
{
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

        return redirect()->route('products.index');
    }


    public function edit( string $id)
    {
        $product = Product::findOrFail($id);
        $categories = $this->getCategoriesProduct(); // Hoặc lọc danh mục theo nhu cầu
    $sizes = Size::where('product_id', $id)->get();
    $productImages = ProductImage::where('product_id', $id)->get();
    $categories = $this->getCategoriesProduct();
    return view('admin.products.edit', compact('product', 'categories', 'sizes', 'productImages'));
    }

    public function update(Request $request, $id)
    {
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

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Find the product
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

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

}