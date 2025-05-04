
  @extends('layouts.landingApp')

  @section('title', 'Dashboard Pengguna')

  @section('content')
      <section class="hero">
          <h1>Selamat Datang, {{ Auth::user()->nama_lengkap }}</h1>
          <p>Kelola akun, pinjaman, dan favoritmu di BookNest.</p>
      </section>

      <section class="section section-light">
          <h2 class="section-title">Profil Pengguna</h2>
          <div class="contact-container">
              <div class="contact-info animated-element">
                  <h3>Informasi Akun</h3>
                  <p><strong>Nama:</strong> {{ Auth::user()->nama_lengkap }}</p>
                  <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                  <p><strong>Telepon:</strong> {{ Auth::user()->phone ?? 'Belum diatur' }}</p>
                  <p><strong>Alamat:</strong> {{ Auth::user()->address ?? 'Belum diatur' }}</p>
                  <p><strong>Instansi:</strong> {{ Auth::user()->institution ?? 'Belum diatur' }}</p>
                  <p><strong>Nomor Identitas:</strong> {{ Auth::user()->identity_number ?? 'Belum diatur' }}</p>
                  {{-- @if($libraryCard)
                      <p><strong>Kartu Perpustakaan:</strong> {{ $libraryCard->barcode }} (Diterbitkan: {{ $libraryCard->issued_date->format('d M Y') }})</p>
                      <p><strong>Status Kartu:</strong> {{ $libraryCard->status ? 'Aktif' : 'Non-Aktif' }}</p>
                  @else
                      <p><strong>Kartu Perpustakaan:</strong> Belum terdaftar</p>
                  @endif --}}
                  <a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </div>
      </section>

      {{-- <section class="section section-dark">
          <h2 class="section-title">Buku Favorit</h2>
          @if($favorites->isEmpty())
              <p class="text-center">Belum ada buku favorit. Jelajahi <a href="{{ route('collections') }}">Koleksi</a> untuk menambahkan!</p>
          @else
              <div class="collections-container">
                  @foreach($favorites as $book)
                      <div class="book-card animated-element">
                          <div class="book-image">
                              <img src="{{ $book->image ?? '/api/placeholder/250/200' }}" alt="{{ $book->judul }}">
                          </div>
                          <div class="book-info">
                              <h3 class="book-title">{{ $book->judul }}</h3>
                              <p class="book-author">{{ $book->penulis }}</p>
                              <p class="book-category">{{ $book->category->name }}</p>
                              <form action="{{ route('favorites.remove', $book) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn">Hapus dari Favorit</button>
                              </form>
                          </div>
                      </div>
                  @endforeach
              </div>
          @endif
      </section> --}}
{{--
      <section class="section section-light">
          <h2 class="section-title">Peminjaman Aktif</h2>
          @if($loans->isEmpty())
              <p class="text-center">Belum ada peminjaman. Pinjam buku di <a href="{{ route('collections') }}">Koleksi</a>!</p>
          @else
              <div class="collections-container">
                  @foreach($loans as $loan)
                      <div class="book-card animated-element">
                          <div class="book-image">
                              <img src="{{ $loan->book->image ?? '/api/placeholder/250/200' }}" alt="{{ $loan->book->judul }}">
                          </div>
                          <div class="book-info">
                              <h3 class="book-title">{{ $loan->book->judul }}</h3>
                              <p class="book-author">{{ $loan->book->penulis }}</p>
                              <p class="book-category">{{ $loan->book->category->name }}</p>
                              <p><strong>Tanggal Pinjam:</strong> {{ $loan->loan_date->format('d M Y') }}</p>
                              <p><strong>Jatuh Tempo:</strong> {{ $loan->due_date->format('d M Y') }}</p>
                              <p><strong>Status:</strong> {{ ucfirst($loan->status) }}</p>
                          </div>
                      </div>
                  @endforeach
              </div>
          @endif
      </section> --}}
{{--
      <section class="section section-dark">
          <h2 class="section-title">Review Saya</h2>
          @if($reviews->isEmpty())
              <p class="text-center">Belum ada review. Tulis review di <a href="{{ route('collections') }}">Koleksi</a>!</p>
          @else
              <div class="collections-container">
                  @foreach($reviews as $review)
                      <div class="book-card animated-element">
                          <div class="book-image">
                              <img src="{{ $review->book->image ?? '/api/placeholder/250/200' }}" alt="{{ $review->book->judul }}">
                          </div>
                          <div class="book-info">
                              <h3 class="book-title">{{ $review->book->judul }}</h3>
                              <p class="book-author">{{ $review->book->penulis }}</p>
                              <p><strong>Rating:</strong> {{ $review->rating }} / 5</p>
                              <p><strong>Komentar:</strong> {{ $review->komentar ?? 'Tidak ada komentar' }}</p>
                          </div>
                      </div>
                  @endforeach
              </div>
          @endif
      </section> --}}
  @endsection

