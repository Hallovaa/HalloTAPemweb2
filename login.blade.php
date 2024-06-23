<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="right-side">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="-- Masukkan Email --">
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="-- Masukkan Password --">
                
                <button type="submit">Login</button>
            </form>
            <a href="{{ route('register') }}" class="login-guru">Belum punya akun? <button class="guru">Register</button></a>
        </div>
    </div>
</body>
</html>
