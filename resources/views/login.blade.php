<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/login.css')}}"  rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p> 
            @error('email')
                {{$message}}
            @enderror
            </p>
            <div>
                <label for="email">Email</label>
                <input id="email" 
                type="email" 
                name="email" 
                value="{{old('email')}}"
                required autofocus>               
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" 
                type="password" 
                name="password" 
                required autocomplete="current-password">
            </div>
            <div>
                <button 
                type="submit"
                >Login</button>
                <button type="button" onclick="window.location.href='{{ route('signup') }}'" class="signup-button">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>
