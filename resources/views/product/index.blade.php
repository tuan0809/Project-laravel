<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>

    <a href="{{ route('product.add') }}">
        <button> Thêm sản phẩm</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
        </tr>
        <tr>
            <td>001</td>
            <td>iPhone 15</td>
            <td>25.000.000</td>
        </tr>
        <tr>
            <td>002</td>
            <td>Samsung S24</td>
            <td>23.000.000</td>
        </tr>
        <tr>
            <td>003</td>
            <td>Xiaomi 14</td>
            <td>15.000.000</td>
        </tr>
    </table>
</body>
</html>
