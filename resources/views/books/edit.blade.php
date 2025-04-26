@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Buku</h1>

    <form action="{{ route('books.update', $book->id_books) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $book->judul) }}" required>
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ old('penulis', $book->penulis) }}" required>
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit', $book->penerbit) }}" required>
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $book->tahun_terbit) }}" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $book->kategori) }}" required>
        </div>

        <div class="form-group">
            <label>Sinopsis</label>
            <textarea name="sinopsis" class="form-control" rows="4">{{ old('sinopsis', $book->sinopsis) }}</textarea>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok', $book->stok) }}" required>
        </div>

        <div class="form-group">
            <label>Status Tampil</label>
            <select name="status_tampil" class="form-control" required>
                <option value="aktif" {{ $book->status_tampil == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="tidak_aktif" {{ $book->status_tampil == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
