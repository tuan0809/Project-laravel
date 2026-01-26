<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>

<h1>Danh sách sản phẩm</h1>

<a href="{{ route('product.add') }}"
   style="display:inline-block;margin-bottom:10px;">
     Add Product
</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Giá</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>
                <a href="{{ route('product.detail', $product->id) }}">
                    {{ $product->name }}
                </a>
            </td>
            <td>{{ $product->price }}</td>
        </tr>
    @endforeach
</table>

<hr>
<a href="{{ route('login') }}">Login</a> |
<a href="{{ route('register') }}">Register</a>

</body>
</html>
