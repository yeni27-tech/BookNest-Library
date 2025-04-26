<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku - BookNest</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @extends('layouts.landingApp')

    @section('title', 'collections')

    @section('content')

    <section class="hero">
        <h1>Koleksi Buku BookNest</h1>
        <p>Jelajahi berbagai koleksi buku berkualitas untuk menambah wawasan dan pengetahuan Anda</p>
        <div class="search-bar">
            <input type="text" placeholder="Cari judul, penulis, atau kategori...">
            <button><i class="fas fa-search"></i> Cari</button>
        </div>
    </section>

    <section class="filter-section">
        <div class="filter-container">
            <div class="filter-group">
                <label>Kategori:</label>
                <select>
                    <option>Semua Kategori</option>
                    <option>Fiksi</option>
                    <option>Non-Fiksi</option>
                    <option>Pendidikan</option>
                    <option>Teknologi</option>
                    <option>Seni & Budaya</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Ketersediaan:</label>
                <select>
                    <option>Semua</option>
                    <option>Tersedia</option>
                    <option>Dipinjam</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Urutkan:</label>
                <select>
                    <option>Terbaru</option>
                    <option>Terpopuler</option>
                    <option>A-Z</option>
                    <option>Z-A</option>
                </select>
            </div>
        </div>
    </section>

    <section class="collection">
        <div class="books-container">
            <!-- Book 1 -->
            <div class="book-card">
                <div class="book-image">
                    <img src="/api/placeholder/300/400" alt="Buku">
                </div>
                <div class="book-info">
                    <h3 class="book-title">Laskar Pelangi</h3>
                    <p class="book-author">Andrea Hirata</p>
                    <div class="book-tags">
                        <span class="book-tag">Novel</span>
                        <span class="book-tag">Fiksi</span>
                    </div>
                    <div class="book-actions">
                        <span class="availability available">Tersedia</span>
                        <button class="btn">Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="book-card">
                <div class="book-image">
                    <img src="/api/placeholder/300/400" alt="Buku">
                </div>
                <div class="book-info">
                    <h3 class="book-title">Bumi Manusia</h3>
                    <p class="book-author">Pramoedya Ananta Toer</p>
                    <div class="book-tags">
                        <span class="book-tag">Fiksi Sejarah</span>
                        <span class="book-tag">Novel</span>
                    </div>
                    <div class="book-actions">
                        <span class="availability available">Tersedia</span>
                        <button class="btn">Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="book-card">
                <div class="book-image">
                    <img src="/api/placeholder/300/400" alt="Buku">
                </div>
                <div class="book-info">
                    <h3 class="book-title">Filosofi Teras</h3>
                    <p class="book-author">Henry Manampiring</p>
                    <div class="book-tags">
                        <span class="book-tag">Filsafat</span>
                        <span class="book-tag">Pengembangan Diri</span>
                    </div>
                    <div class="book-actions">
                        <span class="availability unavailable">Dipinjam</span>
                        <button class="btn">Pesan</button>
                    </div>
                </div>
            </div>

            <!-- Book 4 -->
            <div class="book-card">
                <div class="book-image">
                    <img src="/api/placeholder/300/400" alt="Buku">
                </div>
                <div class="book-info">
                    <h3 class="book-title">Atomic Habits</h3>
                    <p class="book-author">James Clear</p>
                    <div class="book-tags">
                        <span class="book-tag">Pengembangan Diri</span>
                        <span class="book-tag">Psikologi</span>
                    </div>
                    <div class="book-actions">
                        <span class="availability available">Tersedia</span>
                        <button class="btn">Pinjam</button>
                    </div>
                </div>
            </div>

            <!-- Book 5 -->
            <div class="book-card">
                <div class="book-image">
                    <img src="/api/placeholder/300/400" alt="Buku">
                </div>
                <div class="book-info">
                    <h3 class="book-title">Laut Bercerita</h3>
                    <p class="book-author">Leila S. Chudori</p>
                    <div class="book-tags">
                        <span class="book-tag">Novel</span>
                        <span class="book-tag">Fiksi Sejarah</span>
                    </div>
                    <div class="book-actions">
                        <span class="availability unavailable">Dipinjam</span>
                        <button class="btn">Pesan</button>
                    </div>
                </div>
            </div>

            <!-- Book 6 -->
            <div class="book-card">
                <div class="book-image">
                    <img src="/api/placeholder/300/400" alt="Buku">
                </div>
                <div class="book-info">
                    <h3 class="book-title">Sapiens</h3>
                    <p class="book-author">Yuval Noah Harari</p>
                    <div class="book-tags">
                        <span class="book-tag">Sejarah</span>
                        <span class="book-tag">Non-Fiksi</span>
                    </div>
                    <div class="book-actions">
                        <span class="availability available">Tersedia</span>
                        <button class="btn">Pinjam</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <button><i class="fas fa-angle-left"></i></button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button><i class="fas fa-angle-right"></i></button>
        </div>
    </section>
@endsection