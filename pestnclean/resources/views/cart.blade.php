@if (session('user'))
{{-- {{dd(session('user'))}} --}}
    <p>Xin chào, {{ session('user')->fullname }}!</p>
    <p>Vai trò: {{ session('user')->role }}</p>
@endif