@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create New Product</h3>
    </div>

    <!-- form start -->
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter product price" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Enter product description" required></textarea>
            </div>

            <div class="form-group">
                <label for="description">Content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Enter product content" required></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
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
            </div>

            <div class="form-group">
                <label for="sizes">Sizes</label>
                <div id="sizes">
                    <div class="size-group">
                        <input type="text" class="form-control" name="sizes[0][size]" placeholder="Size" required>
                        <input type="number" class="form-control" name="sizes[0][quantity]" placeholder="Quantity" required>
                    </div>
                </div>
                <button type="button" id="add-size" class="btn btn-secondary">Add Size</button>
            </div>

            <div class="form-group">
                <label for="product_images">Product Images</label>
                <input type="file" class="form-control-file" name="product_images[]" id="product_images" multiple>
            </div>
            <div class="form-check">
                <input type="checkbox" value="1" class="form-check-input" name="status" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Product</button>
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
