<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    @if (session('user'))
    {{-- {{dd(session('user'))}} --}}
        <p>Xin chào, {{ session('user')->fullname }}!</p>
        <p>Vai trò: {{ session('user')->role }}</p>
    @endif
    {{-- <h1>Welcome, {{ session('user')->fullname ?? '' }}</h1> --}}
    {{-- {{dd(session('user'))}} --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
