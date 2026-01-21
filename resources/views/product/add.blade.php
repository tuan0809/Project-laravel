<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>

    <form>
        <p>
            <label>Tên sản phẩm:</label><br>
            <input type="text" name="name">
        </p>

        <p>
            <label>Giá:</label><br>
            <input type="number" name="price">
        </p>

        <button type="submit">Lưu</button>
        <a href="{{ route('product.index') }}">Quay lại</a>
    </form>
</body>
</html>
