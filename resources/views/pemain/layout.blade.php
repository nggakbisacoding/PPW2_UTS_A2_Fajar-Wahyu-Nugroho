<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/addon.css">
    <!-- Other meta tags and links go here -->
</head>
<body>
    <header>
        <h1>@yield('header')</h1>
        <nav>
            <ul>
                <li><a href="?">Home</a></li>
                <li><a href="#">Gudang</a></li>
                <li><a href="#">Progress</a></li>
            </ul>
        </nav>
        <div class="bookmark"><a href="javascript:void(0);"><img src="/asset/star-icon.png" alt="Bookmark"></a></div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; Pemain WAKANDA</p>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='/js/scroll.js'></script>
</body>
</html>