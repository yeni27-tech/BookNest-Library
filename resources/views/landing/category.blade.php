<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori - BookNest</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    @extends('layouts.landingApp')

    @section('title', 'categories')

    @section('content')

    <section class="hero">
        <h1>Kategori Buku</h1>
        <p>Temukan berbagai kategori buku untuk memudahkan pencarian sesuai minat dan kebutuhan Anda</p>
    </section>

    <section class="categories-section">
        <h2 class="section-title">Semua Kategori</h2>
        <div class="categories-grid">
            <!-- Fiksi -->
            <div class="category-card" data-category="fiksi">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Fiksi">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Fiksi</h3>
                    <p class="book-count">325 buku</p>
                </div>
            </div>

            <!-- Non-Fiksi -->
            <div class="category-card" data-category="non-fiksi">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Non-Fiksi">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Non-Fiksi</h3>
                    <p class="book-count">273 buku</p>
                </div>
            </div>

            <!-- Sastra -->
            <div class="category-card" data-category="sastra">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Sastra">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Sastra</h3>
                    <p class="book-count">189 buku</p>
                </div>
            </div>

            <!-- Teknologi -->
            <div class="category-card" data-category="teknologi">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Teknologi">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Teknologi</h3>
                    <p class="book-count">215 buku</p>
                </div>
            </div>

            <!-- Pendidikan -->
            <div class="category-card" data-category="pendidikan">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Pendidikan">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Pendidikan</h3>
                    <p class="book-count">247 buku</p>
                </div>
            </div>

            <!-- Seni & Budaya -->
            <div class="category-card" data-category="seni-budaya">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Seni & Budaya">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Seni & Budaya</h3>
                    <p class="book-count">156 buku</p>
                </div>
            </div>

            <!-- Sejarah -->
            <div class="category-card" data-category="sejarah">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Sejarah">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Sejarah</h3>
                    <p class="book-count">178 buku</p>
                </div>
            </div>

            <!-- Anak-anak -->
            <div class="category-card" data-category="anak">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Anak-anak">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Anak-anak</h3>
                    <p class="book-count">203 buku</p>
                </div>
            </div>

            <!-- Kesehatan -->
            <div class="category-card" data-category="kesehatan">
                <div class="category-image">
                    <img src="/api/placeholder/400/300" alt="Kesehatan">
                </div>
                <div class="category-overlay">
                    <h3 class="category-name">Kesehatan</h3>
                    <p class="book-count">143 buku</p>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-categories">
        <h2 class="section-title">Kategori Unggulan</h2>
        <div class="featured-slider">
            <!-- Featured Category 1 -->
            <div class="featured-category">
                <div class="featured-image">
                    <img src="/api/placeholder/400/300" alt="Fiksi Lokal">
                </div>
                <div class="featured-info">
                    <div class="featured-title">
                        <h3 class="featured-name">Fiksi Lokal</h3>
                        <span class="featured-count">124</span>
                    </div>
                    <p class="featured-desc">Kumpulan karya sastra fiksi terbaik dari penulis-penulis Indonesia.</p>
                    <div class="featured-books">
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                    </div>
                    <a href="#" class="browse-btn">Jelajahi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Featured Category 2 -->
            <div class="featured-category">
                <div class="featured-image">
                    <img src="/api/placeholder/400/300" alt="Pengembangan Diri">
                </div>
                <div class="featured-info">
                    <div class="featured-title">
                        <h3 class="featured-name">Pengembangan Diri</h3>
                        <span class="featured-count">97</span>
                    </div>
                    <p class="featured-desc">Buku-buku motivasi dan pengembangan diri untuk meningkatkan kualitas hidup.</p>
                    <div class="featured-books">
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                    </div>
                    <a href="#" class="browse-btn">Jelajahi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Featured Category 3 -->
            <div class="featured-category">
                <div class="featured-image">
                    <img src="/api/placeholder/400/300" alt="Teknologi Informasi">
                </div>
                <div class="featured-info">
                    <div class="featured-title">
                        <h3 class="featured-name">Teknologi Informasi</h3>
                        <span class="featured-count">115</span>
                    </div>
                    <p class="featured-desc">Buku-buku terkini tentang pemrograman, AI, dan teknologi digital.</p>
                    <div class="featured-books">
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                    </div>
                    <a href="#" class="browse-btn">Jelajahi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Featured Category 4 -->
            <div class="featured-category">
                <div class="featured-image">
                    <img src="/api/placeholder/400/300" alt="Bisnis & Ekonomi">
                </div>
                <div class="featured-info">
                    <div class="featured-title">
                        <h3 class="featured-name">Bisnis & Ekonomi</h3>
                        <span class="featured-count">86</span>
                    </div>
                    <p class="featured-desc">Referensi dan panduan praktis di bidang bisnis, keuangan, dan ekonomi.</p>
                    <div class="featured-books">
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                        <div class="featured-book">
                            <img src="/api/placeholder/60/80" alt="Buku">
                        </div>
                    </div>
                    <a href="#" class="browse-btn">Jelajahi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="tags-section">
        <h2 class="section-title">Tag Populer</h2>
        <div class="tags-container">
            <div class="tag">
                <span>Novel</span>
                <span class="tag-count">87</span>
            </div>
            <div class="tag">
                <span>Sejarah Indonesia</span>
                <span class="tag-count">45</span>
            </div>
            <div class="tag">
                <span>Motivasi</span>
                <span class="tag-count">63</span>
            </div>
            <div class="tag">
                <span>Fiksi Ilmiah</span>
                <span class="tag-count">32</span>
            </div>
            <div class="tag">
                <span>Pemrograman</span>
                <span class="tag-count">54</span>
            </div>
            <div class="tag">
                <span>Sastra Klasik</span>
                <span class="tag-count">28</span>
            </div>
            <div class="tag">
                <span>Biografi</span>
                <span class="tag-count">41</span>
            </div>
            <div class="tag">
                <span>Psikologi</span>
                <span class="tag-count">37</span>
            </div>
            <div class="tag">
                <span>Bahasa</span>
                <span class="tag-count">25</span>
            </div>
            <div class="tag">
                <span>Kuliner</span>
                <span class="tag-count">19</span>
            </div>
            <div class="tag">
                <span>Filsafat</span>
                <span class="tag-count">31</span>
            </div>
            <div class="tag">
                <span>Fotografi</span>
                <span class="tag-count">22</span>
            </div>
        </div>
    </section>

    <section class="category-stats">
        <h2 class="section-title">Statistik Kategori</h2>
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-number">2,500+</div>
                <div class="stat-label">Total Buku</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-list"></i>
                </div>
                <div class="stat-number">25</div>
                <div class="stat-label">Kategori</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number">750+</div>
                <div class="stat-label">Penulis</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-tag"></i>
                </div>
                <div class="stat-number">120+</div>
                <div class="stat-label">Tag</div>
            </div>
        </div>
    </section>
@endsection
