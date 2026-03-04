<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark p-3">
    <a href="/" class="text-white me-3">Trang chủ</a>
    <a href="/products" class="text-white">Sản phẩm</a>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-light text-center p-3 mt-4">
    © 2025 Lab7 Laravel
</footer>

</body>
</html>