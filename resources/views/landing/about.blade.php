<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - BookNest</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
@extends('layouts.landingApp')

@section('title', 'about')

@section('content')
    <section class="hero">
        <h1>Tentang BookNest</h1>
        <p>Mengenal lebih dekat perpustakaan digital yang menjadi rumah bagi para pencinta literasi</p>
    </section>

    <section class="section section-light">
        <div class="about-content">
            <div class="about-text animated-element">
                <h3>BookNest: Rumah Bagi Para Pencinta Buku</h3>
                <p>BookNest didirikan pada tahun 2020 dengan visi menjadi perpustakaan digital terdepan yang menyediakan akses mudah ke berbagai sumber pengetahuan. Kami memulai perjalanan ini dengan koleksi 500 buku dan kini telah berkembang menjadi lebih dari 2.500 koleksi dari berbagai kategori dan genre.</p>
                <p>Nama "BookNest" terinspirasi dari sarang burung yang menjadi tempat berlindung, sama seperti buku yang menjadi tempat bernaung bagi pemikiran, imajinasi, dan pengetahuan. Kami menciptakan ekosistem di mana setiap orang dapat menjelajahi dunia literasi dengan nyaman dan mudah.</p>
                <p>Dengan dukungan teknologi modern, BookNest terus berinovasi untuk memberikan pengalaman membaca yang optimal bagi seluruh anggota. Kami percaya bahwa akses terhadap buku berkualitas adalah hak setiap individu dan kami berkomitmen untuk memfasilitasi hal tersebut.</p>
            </div>
            <div class="about-image animated-element">
                <img src="/api/placeholder/600/400" alt="BookNest Library">
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <h2 class="section-title">Misi Kami</h2>
        <div class="mission-container">
            <div class="mission-card animated-element">
                <div class="mission-icon">
                    <i class="fas fa-book-reader"></i>
                </div>
                <h3 class="mission-title">Memperluas Akses Literasi</h3>
                <p>Kami berkomitmen untuk menyediakan akses yang mudah dan terjangkau ke berbagai sumber bacaan berkualitas bagi seluruh lapisan masyarakat.</p>
            </div>
            <div class="mission-card animated-element">
                <div class="mission-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="mission-title">Mendukung Pendidikan</h3>
                <p>BookNest hadir untuk mendukung proses pembelajaran dan pengembangan pengetahuan melalui koleksi buku yang komprehensif dan relevan.</p>
            </div>
            <div class="mission-card animated-element">
                <div class="mission-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="mission-title">Membangun Komunitas</h3>
                <p>Kami menciptakan ruang untuk para pencinta buku berkumpul, berbagi wawasan, dan menumbuhkan budaya membaca di masyarakat.</p>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <h2 class="section-title">Perjalanan Kami</h2>
        <div class="timeline">
            <div class="timeline-item animated-element">
                <div class="timeline-content">
                    <div class="timeline-date">2020</div>
                    <h3>Awal Mula</h3>
                    <p>BookNest didirikan dengan koleksi awal 500 buku dan sistem peminjaman sederhana.</p>
                </div>
            </div>
            <div class="timeline-item animated-element">
                <div class="timeline-content">
                    <div class="timeline-date">2021</div>
                    <h3>Digitalisasi</h3>
                    <p>Implementasi sistem perpustakaan digital dan peluncuran platform online pertama.</p>
                </div>
            </div>
            <div class="timeline-item animated-element">
                <div class="timeline-content">
                    <div class="timeline-date">2022</div>
                    <h3>Ekspansi Koleksi</h3>
                    <p>Koleksi buku mencapai 1.500 judul dengan penambahan kategori baru.</p>
                </div>
            </div>
            <div class="timeline-item animated-element">
                <div class="timeline-content">
                    <div class="timeline-date">2023</div>
                    <h3>Program Kemitraan</h3>
                    <p>Menjalin kerjasama dengan penerbit dan penulis lokal untuk memperkaya koleksi.</p>
                </div>
            </div>
            <div class="timeline-item animated-element">
                <div class="timeline-content">
                    <div class="timeline-date">2024</div>
                    <h3>Inovasi Layanan</h3>
                    <p>Peluncuran aplikasi mobile dan fitur-fitur interaktif untuk meningkatkan pengalaman membaca.</p>
                </div>
            </div>
            <div class="timeline-item animated-element">
                <div class="timeline-content">
                    <div class="timeline-date">2025</div>
                    <h3>BookNest Sekarang</h3>
                    <p>Lebih dari 2.500 koleksi buku dengan anggota aktif yang terus bertambah dari seluruh Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <h2 class="section-title">Pengembang Website</h2>
        <div class="team-container">
            <div class="team-member animated-element">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Team Member">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Riza Afri</h3>
                    <p class="member-role">Front end</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member animated-element">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Team Member">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Adang Nugroho</h3>
                    <p class="member-role">Database Management</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member animated-element">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Team Member">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Yeni Faturohmah</h3>
                    <p class="member-role">Back-end -Project Management</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member animated-element">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Team Member">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Geo Ananda</h3>
                    <p class="member-role">Front end</p>
                    <div class="social-links">
                        
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <h2 class="section-title">Testimoni Anggota</h2>
        <div class="testimonial-slider">
            <div class="testimonial-slide active">
                <div class="testimonial-image">
                    <img src="/api/placeholder/100/100" alt="Testimonial">
                </div>
                <p class="testimonial-text">BookNest telah mengubah cara saya mengakses buku. Koleksi yang lengkap dan sistem peminjaman yang mudah membuat saya selalu kembali. Saya sangat merekomendasikan layanan ini untuk semua pencinta buku!</p>
                <h4 class="testimonial-name">Maya Sari</h4>
                <p class="testimonial-role">Anggota sejak 2021</p>
            </div>
            <div class="testimonial-slide">
                <div class="testimonial-image">
                    <img src="/api/placeholder/100/100" alt="Testimonial">
                </div>
                <p class="testimonial-text">Sebagai seorang mahasiswa, BookNest sangat membantu studi saya. Saya bisa mengakses berbagai buku referensi dengan mudah tanpa harus mengeluarkan biaya besar. Platform yang sangat user-friendly!</p>
                <h4 class="testimonial-name">Fajar Ramadhan</h4>
                <p class="testimonial-role">Anggota sejak 2022</p>
            </div>
            <div class="testimonial-slide">
                <div class="testimonial-image">
                    <img src="/api/placeholder/100/100" alt="Testimonial">
                </div>
                <p class="testimonial-text">Saya sangat menyukai program diskusi buku yang diadakan BookNest setiap bulan. Selain mendapatkan akses ke buku-buku berkualitas, saya juga bisa bertemu dengan komunitas pembaca yang menyenangkan.</p>
                <h4 class="testimonial-name">Rini Wijaya</h4>
                <p class="testimonial-role">Anggota sejak 2023</p>
            </div>
            <div class="slider-nav">
                <span class="slider-dot active" data-slide="0"></span>
                <span class="slider-dot" data-slide="1"></span>
                <span class="slider-dot" data-slide="2"></span>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <h2 class="section-title">Pencapaian Kami</h2>
        <div class="achievements">
            <div class="achievement animated-element">
                <div class="achievement-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="achievement-number">5,000+</div>
                <p>Anggota Aktif</p>
            </div>
            <div class="achievement animated-element">
                <div class="achievement-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="achievement-number">2,500+</div>
                <p>Koleksi Buku</p>
            </div>
            <div class="achievement animated-element">
                <div class="achievement-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="achievement-number">30+</div>
                <p>Mitra Kerja</p>
            </div>
            <div class="achievement animated-element">
                <div class="achievement-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="achievement-number">12</div>
                <p>Penghargaan</p>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Bergabunglah dengan BookNest!</h2>
        <p>Jadilah bagian dari komunitas pencinta buku terbesar di Indonesia. Nikmati akses tak terbatas ke koleksi buku kami dan ikuti berbagai program menarik yang kami selenggarakan.</p>
        <a href="#" class="btn">Daftar Sekarang</a>
    </section>

    @endsection
