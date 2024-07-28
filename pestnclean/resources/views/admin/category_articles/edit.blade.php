@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Chỉnh Sửa Danh Mục Bài Viết</h3>
    </div>

    {{-- Thông báo lỗi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- Kết thúc thông báo lỗi --}}
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('categoriesArticles.update', $category->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
              <label for="title">Tiêu đề</label>
              <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $category->title) }}" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="description">Mô tả</label>
              <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $category->description) }}" placeholder="Enter description">
            </div>
            <div class="form-group">
              <label for="category_parent">Danh mục cha</label>
              <select class="form-control" name="category_parent" id="category_parent">
                <option value="0" {{ $category->category_parent == 0 ? 'selected' : '' }}>---Root---</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $category->category_parent ? 'selected' : '' }}>
                        @if($cat->level > 1)
                            @for ($i = 1; $i < $cat->level; $i++)
                                -- 
                            @endfor
                        @endif
                        {{ $cat->title }}
                    </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="image">Hình ảnh</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="form-control-file" name="image" id="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
              </div>
              @if ($category->image)
                <img src="{{ asset('uploads/category_articles/' . $category->image) }}" alt="Current Image" width="100px">
              @endif
            </div>
            <div class="form-check">
              <input type="checkbox" value="1" class="form-check-input" name="status" id="status" {{ $category->status ? 'checked' : '' }}>
              <label class="form-check-label" for="status">Active</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </div>
    </form>
</div>

@endsection
