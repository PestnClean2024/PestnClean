
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
        <h1>Products</h1>

        <!-- Danh sách danh mục -->
        <div class="mb-4">
            <h2>Categories</h2>
            <ul class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item">
                        <a href="{{ route('shop.index', ['category_id' => $category->id]) }}">{{ $category->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4">
                        <img src="{{ asset('uploads/products/' . $product->main_image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Price: ${{ $product->price }}</p>
                            <a href="{{ route('shop.details', ['id' => $product->id]) }}" class="btn btn-primary mt-auto">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Phần phân trang -->
        <div>
            {{ $products->withQueryString()->links() }}
        </div>
    </div>
