{{-- <header>
    <div class="logo">
        <i class="fas fa-book-open"></i>
        <span>BookNest</span>
    </div>
    <nav>
        <ul>
            <li><a href="index.html" data-page="about">Tentang Kami</a></li>
            <li><a href="contact.html" data-page="contact">Kontak</a></li>
            <li><a href="collections.html" data-page="collections">Koleksi</a></li>
            <li><a href="categories.html" data-page="categories">Kategori</a></li>
            <li><a href="login.html" data-page="login"><i class="fas fa-user"></i> Masuk</a></li>
        </ul>
    </nav>
</header>
<style>
    /* Variabel */
    :root {
        --primary: #2c3e50;
        --secondary: #3498db;
        --accent: #e74c3c;
        --light: #ecf0f1;
        --dark: #2c3e50;
        --shadow: 0 5px 15px rgba(0,0,0,0.1);
        --transition: all 0.3s ease;
    }

    /* Header */
    header {
        background-color: var(--primary);
        color: white;
        padding: 1rem 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: var(--shadow);
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .logo {
        display: flex;
        align-items: center;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .logo i {
        margin-right: 10px;
        color: var(--accent);
    }

    nav ul {
        display: flex;
        list-style: none;
    }

    nav ul li {
        margin-left: 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        transition: var(--transition);
        padding: 0.5rem 1rem;
        border-radius: 20px;
    }

    nav ul li a:hover, nav ul li a.active {
        background-color: var(--secondary);
    }

    /* Responsive */
    @media (max-width: 768px) {
        nav ul {
            display: none;
        }
    }
</style> --}}

<header>
    <div class="logo">
        <i class="fas fa-book-open"></i>
        <span>BookNest</span>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('collections') }}" class="{{ request()->routeIs('collections') ? 'active' : '' }}">Koleksi</a></li>
            <li><a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">Kategori</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
            <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}"><i class="fas fa-user"></i> Masuk</a></li>
            <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}"><i class="fas fa-user-plus"></i> Register</a></li>
        </ul>
    </nav>
</header>

