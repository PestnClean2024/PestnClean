@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
    </div>

    <!-- form start -->
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ $product->price }}" placeholder="Enter product price" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Enter product description" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="description">Content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Enter product content" required>{{ $product->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            @if($category->level > 1)
                                @for ($i = 1; $i < $category->level; $i++)
                                    -- 
                                @endfor
                            @endif
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="main_image">Main Image</label>
                <input type="file" class="form-control-file" name="main_image" id="main_image">
                @if($product->main_image)
                    <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="Main Image" width="150" height="150">
                @endif
            </div>

            <div class="form-group">
                <label for="sizes">Sizes</label>
                <div id="sizes">
                    @foreach($sizes as $index => $size)
                        <div class="size-group">
                            <input type="text" class="form-control" name="sizes[{{ $index }}][size]" value="{{ $size->size }}" placeholder="Size" required>
                            <input type="number" class="form-control" name="sizes[{{ $index }}][quantity]" value="{{ $size->quantity }}" placeholder="Quantity" required>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-size" class="btn btn-secondary">Add Size</button>
            </div>

            <div class="form-group">
                <label for="product_images">Product Images</label>
                <input type="file" class="form-control-file" name="product_images[]" id="product_images" multiple>
                @foreach($productImages as $image)
                    <img src="{{ asset('uploads/products/' . $image->image_path) }}" alt="Product Image" width="150" height="150">
                @endforeach
            </div>

            <div class="form-check">
                <input type="checkbox" value="1" class="form-check-input" name="status" id="status" {{ $product->status == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Active</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('add-size').addEventListener('click', function() {
        var index = document.querySelectorAll('#sizes .size-group').length;
        var sizeGroup = `
            <div class="size-group">
                <input type="text" class="form-control" name="sizes[${index}][size]" placeholder="Size" required>
                <input type="number" class="form-control" name="sizes[${index}][quantity]" placeholder="Quantity" required>
            </div>
        `;
        document.getElementById('sizes').insertAdjacentHTML('beforeend', sizeGroup);
    });
</script>

@endsection
