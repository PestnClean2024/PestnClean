@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Danh sách sản phẩm</h3>
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
    {{-- Thông báo thành công --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- /.card-header -->
    <!-- form start -->
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh chính</th>
                <th scope="col">Giá</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Ngày cập nhật</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$product->name}}</td>
                    <td>
                        <img width="80px" height="80px" src="{{asset('uploads/products/'.$product->main_image)}}">
                    </td>
                    <td>{{number_format($product->price,0,', ','. ') }} VND</td>
                    <td>{{ $product->category->title }}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                        @if(auth()->user()->role === 'superadmin')
                        <form action="{{route('products.accept',[$product->id])}}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-success" value="Accept">
                        </form>
                        <form action="{{route('products.reject',[$product->id])}}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-warning" value="Reject">
                        </form>
                        @elseif(auth()->user()->role === 'admin' || auth()->user()->role === 'executive')
                            @if($product->status == '1')
                                <span class="text text-success">Đã duyệt</span>
                            @elseif($product->status == '2')
                                <span class="text text-danger">Bị từ chối</span>
                            @else
                                <span class="text text-primary">Chưa duyệt</span>
                            @endif
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('products.edit', [$product->id]) }}">Sửa</a>

                        <!-- Chỉ Superadmin mới thấy các nút duyệt và từ chối -->
                        

                        <!-- Form Xóa -->
                        <form onsubmit="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?');" action="{{ route('products.destroy', [$product->id]) }}" method="POST" style="display:inline;">
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
