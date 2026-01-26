<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }}</title>
</head>
<body>

<h1>{{ $product->name }}</h1>

@if($product->image)
    <img src="{{ asset('images/' . $product->image) }}"
         width="200"
         alt="{{ $product->name }}">
@endif

<p>Giá: {{ $product->price }} USD</p>

<a href="{{ route('product.index') }}">⬅ Quay lại</a>

</body>
</html>
