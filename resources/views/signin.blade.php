<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>
<body>

    <h1>Sign In</h1>

    {{-- Hiển thị lỗi validate --}}
    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- Thông báo --}}
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ url('/signin') }}">
        @csrf

        <p>
            <label>Username</label><br>
            <input type="text" name="username" value="{{ old('username') }}" required>
        </p>

        <p>
            <label>Password</label><br>
            <input type="password" name="password" required>
        </p>

        <p>
            <label>Re-password</label><br>
            <input type="password" name="repass" required>
        </p>

        <p>
            <label>MSSV</label><br>
            <input type="text" name="mssv" value="{{ old('mssv') }}" required>
        </p>

        <p>
            <label>Lớp môn học</label><br>
            <input type="text" name="lopmonhoc" value="{{ old('lopmonhoc') }}" required>
        </p>

        <p>
            <label>Giới tính</label><br>
            <select name="gioitinh" required>
                <option value="">-- Chọn --</option>
                <option value="nam" {{ old('gioitinh')=='nam'?'selected':'' }}>Nam</option>
                <option value="nu"  {{ old('gioitinh')=='nu'?'selected':'' }}>Nữ</option>
            </select>
        </p>

        <button type="submit">Sign In</button>
    </form>

</body>
</html>
