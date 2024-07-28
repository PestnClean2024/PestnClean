<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('login') }}" method="post">
        @csrf
        <label for="login_id">Email:</label>
        <input type="text" name="login_id" value="{{ old('login_id') }}"><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password"><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
