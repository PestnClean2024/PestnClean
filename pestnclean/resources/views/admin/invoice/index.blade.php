@extends('layouts.app')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Danh sách đơn hàng</h3>
    </div>

    <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td class="mailbox-name">ID</td>
                    <td class="mailbox-name">Tên</td>
                    <td class="mailbox-name">Ngày đặt</td>
                    <td class="mailbox-name">Tổng tiền</td>
                    <td class="mailbox-subject">Tình trạng đơn hàng</td>
                    <td class="mailbox-date">Chức năng</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $item)
                    <tr>
                        <td class="mailbox-name">{{ $item->id }}</td>
                        <td class="mailbox-name">{{ $item->user->fullname }}</td>
                        <td class="mailbox-name">{{ $item->date }}</td>
                        <td class="mailbox-name">{{ $item->total }}</td>
                        <td class="mailbox-subject">{{ $item->status }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('invoice-detail', $item->id) }}">xem chi tiết</a>
                            @if (auth()->user()->role === 'admin' && $item->status === 'đang chờ duyệt')
                            @else
                                <a class="btn btn-success" href="{{ route('approve-order', $item->id) }}">Duyệt đơn</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">{{ $invoices->links('pagination::bootstrap-4') }}</div>
    </div>
@endsection
