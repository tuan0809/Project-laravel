<h1>Login</h1>

@if (session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

@if (session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit">Login</button>
</form>
