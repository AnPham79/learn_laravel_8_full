<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('process_login') }}" method="POST">
        @csrf
        Email
        <br>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <input type="text" name="email" placeholder="nhập email của bạn">
        <br>
        Mật khẩu
        <br>
        <input type="password" name="matkhau" placeholder="nhập mật khẩu của bạn">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <button>Đăng nhập</button>
    </form>
</body>
</html>