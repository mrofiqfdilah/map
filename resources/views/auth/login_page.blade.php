<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="{{ route('login_store') }}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Masukan Email Anda"><br>
    <input type="password" name="password" id="password" placeholder="Masukan Password Anda"><br>
    <button type="submit">Login now</button>
    </form>
    <p>Belum punya akun? <a href="/register_page">Register</a></p>
</body>
</html>