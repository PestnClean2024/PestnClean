<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>{{ $blog->title }}</h1>
    <img src="{{ asset('uploads/articles/' . $blog->image) }}" alt="{{ $blog->title }}" style="width:100px; height:auto;">
    <p>{{ $blog->description }}</p>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to Blogs</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
