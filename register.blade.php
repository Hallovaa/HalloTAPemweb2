<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="right-side">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="-- Masukkan Nama --">
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="-- Masukkan Email --">

                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="-- Masukkan Password --">
                
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="-- Konfirmasi Password --">
                
                <button type="submit" href="{{ route('login') }}">Register</button>
            </form>
            <a href="{{ route('login') }}" class="login-guru">Sudah punya akun? <button class="guru">Login</button></a>
        </div>
    </div>
</body>
</html>
