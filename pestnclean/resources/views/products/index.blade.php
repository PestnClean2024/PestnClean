<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>Products</h1>
    <div class="row">
        <!-- Danh sách sản phẩm -->
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                    </div>
                    <a href="{{ route('shop.details', ['id' => $product->id]) }}">Xem chi tiết</a>
                </div>
            </div>
        @endforeach
    </div>
    {{-- phần phân trang --}}
    <div>
        {{ $products->withQueryString()->links() }}
    </div>
</div>
