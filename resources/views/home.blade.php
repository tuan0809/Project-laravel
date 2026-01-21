<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Trang chủ</h1>

    <ul>
        <li><a href="{{ route('product.index') }}">Danh sách sản phẩm</a></li>
        <li><a href="{{ route('sinhvien.info') }}">Thông tin sinh viên</a></li>
        <li><a href="{{ route('banco', 8) }}">Bàn cờ vua 8x8</a></li>
    </ul>
</body>
</html>
