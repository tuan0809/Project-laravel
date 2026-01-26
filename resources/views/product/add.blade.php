<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>
<body>

<h1>➕ Thêm sản phẩm mới</h1>

{{-- Hiển thị lỗi validate --}}
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <p>
        <label>Tên sản phẩm</label><br>
        <input type="text"
               name="name"
               value="{{ old('name') }}"
               required>
    </p>

    <p>
        <label>Giá</label><br>
        <input type="number"
               name="price"
               value="{{ old('price') }}"
               required>
    </p>

    <p>
        <label>Ảnh sản phẩm</label><br>
        <input type="file"
               name="image"
               accept="image/*">
    </p>

    <button type="submit">💾 Lưu sản phẩm</button>
    <a href="{{ route('product.index') }}">⬅ Quay lại</a>

</form>

</body>
</html>
