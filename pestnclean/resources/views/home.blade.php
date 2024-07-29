<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Trang chủ</h1>
    @if (session('user'))
        {{-- {{dd(session('user'))}} --}}
        <p>Xin chào, {{ session('user')->fullname }}!</p>
        <p>Vai trò: {{ session('user')->role }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endif
</body>

</html>
