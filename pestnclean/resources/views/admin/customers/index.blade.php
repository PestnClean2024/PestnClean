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
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$customer->fullname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        @if($customer->status == 1)
                            <span class="text-success">Active</span>
                        @else
                            <span class="text-danger">Locked</span>
                        @endif
                    </td>
                    <td>
                        @if($customer->status == 1)
                            <form action="{{ route('customers.lock', [$customer->id]) }}" method="POST" style="display:inline;">
                                @method('PATCH')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Khóa">
                            </form>
                        @else
                            <form action="{{ route('customers.unlock', [$customer->id]) }}" method="POST" style="display:inline;">
                                @method('PATCH')
                                @csrf
                                <input class="btn btn-success" type="submit" value="Mở khóa">
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
