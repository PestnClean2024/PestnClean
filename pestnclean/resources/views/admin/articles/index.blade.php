@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Danh mục bài viết</h3>
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
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Created date</th>
            <th scope="col">Update date</th>
            <th scope="col">Status</th>
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            @foreach($article as $key => $art)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$art->title}}</td>
                    <td><img width="80px" height="80px" src="{{asset('uploads/articles/'.$art->image)}}"></td>
                    <td>{{$art->description}}</td>
                    
                    <td>{{$art->created_at}}</td>
                    <td>{{$art->updated_at}}</td>
                    <td>
                        @if($art->status==1)
                            <span class="text text-success">Active</span>
                        @else
                            <span class="text text-error">UnActive</span>
                        @endif
                    </td>
                    <td>
                        <a  width="68.81px" class="btn btn-warning" href="{{route('articles.edit',[$art->id])}}">Sửa</a>
                        <form onsubmit="return confirm('You definitely want to delete?');" action="{{route('articles.destroy',[$art->id])}}" method="POST">
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
