@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tạo Danh Mục Bài Viết</h3>
    </div>

    <!-- Thông báo lỗi -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Kết thúc thông báo lỗi -->

    <!-- form start -->
    <form method="POST" action="{{ route('categoriesArticles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nhập tiêu đề">
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea class="form-control" name="description" id="description" rows="4" placeholder="Nhập mô tả"></textarea>
            </div>

            <div class="form-group">
                <label for="category_parent">Danh mục cha</label>
                <select class="form-control" name="category_parent" id="category_parent">
                    <option value="0">---Root---</option>
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
                <label for="image">Hình ảnh</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" name="image" id="image">
                        <label class="custom-file-label" for="image">Chọn tệp</label>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" value="1" class="form-check-input" name="status" id="status">
                <label class="form-check-label" for="status">Kích hoạt</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo</button>
        </div>
    </form>
</div>

@endsection
