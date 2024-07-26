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
    {{-- Kết thúc thông báo lỗi --}}
    <!-- /.card-header -->
    <!-- form start -->
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Main Image</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Sizes</th>
                <th scope="col">Created Date</th>
                <th scope="col">Updated Date</th>
                <th scope="col">Status</th>
                <th scope="col">Manage</th>
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
                    <td>{!!$product->description!!}</td>
                    <td>{{number_format($product->price,0,', ','. ') }}VND</td>
                    <td>{{ $product->category->title }}</td>
                    <td>
                        @foreach($product->sizes as $size)
                            <div>{{ $size->size }}: {{ $size->quantity }}</div>
                        @endforeach
                    </td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                        @if($product->status == 1)
                            <span class="text text-success">Active</span>
                        @else
                            <span class="text text-error">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('products.edit', [$product->id]) }}">Sửa</a>
                        <form onsubmit="return confirm('You definitely want to delete?');" action="{{ route('products.destroy', [$product->id]) }}" method="POST" style="display:inline;">
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
