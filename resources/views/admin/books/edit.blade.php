@extends('layouts.admin')

  @section('title', 'Edit Buku')

  @section('content')
      <div class="form-container">
          <h2 class="text-2xl font-semibold mb-6">Edit Buku</h2>
          <form action="{{ route('admin.books.update', $book) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" id="judul" value="{{ old('judul', $book->judul) }}" class="@error('judul') border-red-500 @enderror">
                  @error('judul')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="penulis">Penulis</label>
                  <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $book->penulis) }}" class="@error('penulis') border-red-500 @enderror">
                  @error('penulis')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit', $book->penerbit) }}" class="@error('penerbit') border-red-500 @enderror">
                  @error('penerbit')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="tahun_terbit">Tahun Terbit</label>
                  <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}" class="@error('tahun_terbit') border-red-500 @enderror">
                  @error('tahun_terbit')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="category_id">Kategori</label>
                  <select name="category_id" id="category_id" class="@error('category_id') border-red-500 @enderror">
                      <option value="">Pilih Kategori</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                      @endforeach
                  </select>
                  @error('category_id')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="number" name="stok" id="stok" value="{{ old('stok', $book->stok) }}" class="@error('stok') border-red-500 @enderror">
                  @error('stok')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="image">Gambar</label>
                  <input type="file" name="image" id="image" class="@error('image') border-red-500 @enderror">
                  @if ($book->image)
                      <img src="{{ Storage::url($book->image) }}" alt="{{ $book->judul }}" class="w-32 mt-2">
                  @endif
                  @error('image')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="description">Deskripsi</label>
                  <textarea name="description" id="description" rows="5" class="@error('description') border-red-500 @enderror">{{ old('description', $book->description) }}</textarea>
                  @error('description')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <button type="submit" class="btn">Simpan</button>
          </form>
      </div>
  @endsection
