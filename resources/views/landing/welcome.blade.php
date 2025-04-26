
 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookNest - Perpustakaan Digital Modern</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @extends('layouts.landingApp')

    @section('title', 'home')

    @section('content')

    <!-- Hero Section -->
    <section class="hero1">
        <div class="container">
            <div class="hero-content1">
                <h1>Temukan Dunia Pengetahuan di BookNest</h1>
                <p>Akses ribuan buku digital dan fisik. Tingkatkan pengetahuan Anda dengan koleksi terlengkap kami.</p>

                <div class="search-bar">
                    <input type="text" placeholder="Cari judul buku, penulis, atau ISBN">
                    <button><i class="fas fa-search"></i> Cari</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2>Layanan Unggulan Kami</h2>
                <p>BookNest menyediakan berbagai layanan perpustakaan modern untuk memenuhi kebutuhan membaca Anda</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Koleksi Lengkap</h3>
                    <p>Akses ribuan judul buku dari berbagai genre dan kategori yang selalu diperbarui secara berkala</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Akses Digital</h3>
                    <p>Baca buku favorit Anda kapan saja dan di mana saja melalui aplikasi mobile kami</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Peminjaman Mudah</h3>
                    <p>Sistem peminjaman dan pengembalian yang cepat dan efisien tanpa proses yang rumit</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Komunitas Pembaca</h3>
                    <p>Bergabunglah dengan komunitas pembaca untuk berbagi rekomendasi dan ulasan buku</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Books Section -->
    <section class="popular-books">
        <div class="container">
            <div class="section-header">
                <h2>Buku Populer</h2>
                <p>Jelajahi koleksi buku terlaris dan terpopuler di perpustakaan kami</p>
            </div>

            <div class="books-grid">
                <div class="book-card">
                    <div class="book-image">
                        <img src="/api/placeholder/220/280" alt="Buku 1">
                    </div>
                    <div class="book-info">
                        <h4>Laskar Pelangi</h4>
                        <p>Andrea Hirata</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Pinjam Sekarang</a>
                    </div>
                </div>

                <div class="book-card">
                    <div class="book-image">
                        <img src="/api/placeholder/220/280" alt="Buku 2">
                    </div>
                    <div class="book-info">
                        <h4>Bumi Manusia</h4>
                        <p>Pramoedya Ananta Toer</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#" class="btn">Pinjam Sekarang</a>
                    </div>
                </div>

                <div class="book-card">
                    <div class="book-image">
                        <img src="/api/placeholder/220/280" alt="Buku 3">
                    </div>
                    <div class="book-info">
                        <h4>Pulang</h4>
                        <p>Tere Liye</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#" class="btn">Pinjam Sekarang</a>
                    </div>
                </div>

                <div class="book-card">
                    <div class="book-image">
                        <img src="/api/placeholder/220/280" alt="Buku 4">
                    </div>
                    <div class="book-info">
                        <h4>Filosofi Teras</h4>
                        <p>Henry Manampiring</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Pinjam Sekarang</a>
                    </div>
                </div>

                <div class="book-card">
                    <div class="book-image">
                        <img src="/api/placeholder/220/280" alt="Buku 5">
                    </div>
                    <div class="book-info">
                        <h4>Hujan</h4>
                        <p>Tere Liye</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#" class="btn">Pinjam Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Testimoni Anggota</h2>
                <p>Apa kata mereka yang sudah bergabung dengan perpustakaan BookNest</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="quote">"</div>
                    <p class="testimonial-content">BookNest sangat membantu saya dalam menemukan buku-buku yang sulit didapat. Koleksinya sangat lengkap dan sistem peminjamannya sangat mudah!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="/api/placeholder/50/50" alt="User 1">
                        </div>
                        <div class="author-info">
                            <h5>Ahmad Fadli</h5>
                            <p>Mahasiswa</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote">"</div>
                    <p class="testimonial-content">Sebagai seorang guru, saya merekomendasikan BookNest kepada semua siswa saya. Layanan digital mereka sangat memudahkan akses ke berbagai referensi.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="/api/placeholder/50/50" alt="User 2">
                        </div>
                        <div class="author-info">
                            <h5>Siti Rahma</h5>
                            <p>Guru</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote">"</div>
                    <p class="testimonial-content">Saya suka dengan komunitas pembaca di BookNest. Kami sering mengadakan diskusi buku yang sangat menginspirasi dan membuka wawasan.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="/api/placeholder/50/50" alt="User 3">
                        </div>
                        <div class="author-info">
                            <h5>Budi Santoso</h5>
                            <p>Pegawai Swasta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Bergabunglah dengan BookNest Sekarang!</h2>
                <p>Dapatkan akses ke ribuan buku dan bergabunglah dengan komunitas pembaca yang berdedikasi.</p>
                <a href="#" class="btn">Daftar Gratis</a>
            </div>
        </div>
    </section>
@endsection