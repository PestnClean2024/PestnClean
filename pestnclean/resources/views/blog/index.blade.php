<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Products</h1>

    <!-- Danh sách danh mục -->
    <div class="mb-4">
        <h2>Categories</h2>
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <a href="{{ route('blog.index', ['category_id' => $category->id]) }}">{{ $category->title }} - {{ $category->description }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Danh sách sản phẩm -->
    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4">
                    <img src="{{ asset('uploads/articles/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ $blog->description }}</p>
                        {{-- <p class="card-text">{{ $blog->price }}</p> --}}
                        <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-primary mt-auto">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Phần phân trang -->
    <div>
        {{ $blogs->withQueryString()->links() }}
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
