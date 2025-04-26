<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BookNest</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('landing.partials.navbar')

    @yield('content')

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang BookNest</h3>
                <p>BookNest adalah perpustakaan digital yang menyediakan akses mudah ke ribuan buku berkualitas untuk mendukung literasi dan pendidikan.</p>
            </div>
            <div class="footer-section">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('collections') }}">Koleksi</a></li>
                    <li><a href="{{ route('categories') }}">Kategori</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Kontak Kami</h3>
                <ul>
                    <li><a href="mailto:info@booknest.id">info@booknest.id</a></li>
                    <li><a href="tel:+622112345678">+62 21 1234 5678</a></li>
                    <li><a href="#">Jl. Literasi No. 1, Jakarta</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 BookNest. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

