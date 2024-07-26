<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('register') }}" method="post">
        @csrf
        <label for="fullname">fullname:</label>
        <input type="text" name="fullname" value="{{ old('fullname') }}"><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password"><br>
        
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation"><br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}"><br>
        
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ old('address') }}"><br>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
