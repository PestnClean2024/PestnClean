<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>

    @if ($product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
        </div>
        @if (Route::has('login'))
            @auth
                <a href="#" >Add to cart</a>
            @else
                <p>Đăng nhập hoặc đăng kí để thêm sản phẩm vào giỏ hàng</p>
            @endauth
        @endif
    @else
        <p>Product not found.</p>
    @endif

    <h2>Product Images</h2>
    <img src="{{ asset('uploads/categories/' .$product->main_image) }}" alt="">
    @if ($productImg->isNotEmpty())
        <div>
            @foreach ($productImg as $image)
                <img src="{{ asset('uploads/categories/' . $image->image_path) }}" alt="Product Image" style="width:200px;height:auto;">
            @endforeach
        </div>
    @else
        <p>No images available for this product.</p>
    @endif
</body>
</html>
