@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Danh Sách Danh Mục Bài Viết</h3>
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
    <table class="table table-striped" id="myTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Ngày Tạo</th>
            <th scope="col">Ngày Cập Nhật</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Quản Lý</th>
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $key => $category)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $category->title }}</td>
                    <td><img width="80px" height="80px" src="{{ asset('uploads/category_articles/' . $category->image) }}" alt="Image"></td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $category->updated_at->format('d/m/Y H:i') }}</td>
                    <td>
                        @if($category->status == 1)
                            <span class="text text-success">Active</span>
                        @else
                            <span class="text text-danger">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('categoriesArticles.edit', $category->id) }}">Sửa</a>
                        <form onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');" action="{{ route('categoriesArticles.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Xóa">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
  </div>

@endsection
