@extends('layouts.app')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Danh sách khách hàng</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Password</th>
                <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$customer->fullname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{ substr($customer->password, 0, 10) }}...</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('customers.edit', [$customer->id]) }}">Sửa</a>
                        <form onsubmit="return confirm('You definitely want to delete?');" action="{{ route('customers.destroy', [$customer->id]) }}" method="POST" style="display:inline;">
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
