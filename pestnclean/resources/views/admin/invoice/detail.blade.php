@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('invoice') }}" class="btn btn-secondary">Quay lại</a>
        </div>

        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Chi tiết đơn hàng</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Invoice ID:</strong> {{ $invoice->id }}</p>
                        <p><strong>User:</strong> {{ $invoice->user->fullname }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Date:</strong> {{ $invoice->date }}</p>
                        <p><strong>Total:</strong> {{ $invoice->total }}</p>
                        <p><strong>Status:</strong> {{ $invoice->status }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Sản phẩm</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td class="mailbox-name">ID</td>
                                <td class="mailbox-name">Tên sản phẩm</td>
                                <td class="mailbox-name">Giá tiền</td>
                                <td class="mailbox-name">Số lượng</td>
                                <td class="mailbox-subject">Size</td>
                                <td class="mailbox-date">Tổng tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoice->invoiceDetail as $item)
                                <tr>
                                    <td class="mailbox-name">test id</td>
                                    <td class="mailbox-name">test tên</td>
                                    <td class="mailbox-name">test giá </td>
                                    <td class="mailbox-name">test số lượng</td>
                                    <td class="mailbox-name">test size</td>
                                    <td class="mailbox-name">test tổng tiền</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="d-flex justify-content-center">{{ $access->links('pagination::bootstrap-4') }}</div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
