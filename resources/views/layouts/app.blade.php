<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Tambahkan CSS atau JavaScript di sini -->
</head>
<body>
    <div class="container">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>