@extends('layouts.app')

@section('content')
    <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td class="mailbox-name">ID</td>
                    <td class="mailbox-name">Tên</td>
                    <td class="mailbox-name">Số điện thoại</td>
                    <td class="mailbox-name">Email</td>
                    <td class="mailbox-subject">Subject</td>
                    <td class="mailbox-date">Thời gian hoạt động</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($access as $key => $item)
                    <tr>
                        <td class="mailbox-name">{{ $item->id }}</td>
                        <td class="mailbox-name">{{ $item->user->fullname }}</td>
                        <td class="mailbox-name">{{ $item->user->phone }}</td>
                        <td class="mailbox-name">{{ $item->user->email }}</td>
                        <td class="mailbox-subject">{{ $item->activity }}</td>
                        <td class="mailbox-date">
                            {{ \Carbon\Carbon::now()->diffForHumans(\Carbon\Carbon::parse($item->access_at), true) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">{{ $access->links('pagination::bootstrap-4') }}</div>
        <!-- /.table -->
    </div>
@endsection
