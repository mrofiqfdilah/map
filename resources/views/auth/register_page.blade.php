<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ route('register_store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Masukan Nama Anda"><br>
    <input type="email" name="email" id="email" placeholder="Masukan Email Anda"><br>
    <input type="password" name="password" id="password" placeholder="Masukan Password Anda"><br>
    <button type="submit">Register now</button>
    </form>
    <p>Sudah punya akun? <a href="/login_page">Login</a></p>
</body>
</html>