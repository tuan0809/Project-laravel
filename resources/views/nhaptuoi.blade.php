<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>
</head>
<body>

<h1>Nhập tuổi</h1>

@if (session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ route('age.store') }}">
    @csrf
    <input type="text" name="age" placeholder="Nhập tuổi">
    <button type="submit">Gửi</button>
</form>

</body>
</html>
