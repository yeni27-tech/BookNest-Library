@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ old('penulis') }}" required>
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit') }}" required>
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit') }}" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ old('kategori') }}" required>
        </div>

        <div class="form-group">
            <label>Sinopsis</label>
            <textarea name="sinopsis" class="form-control" rows="4">{{ old('sinopsis') }}</textarea>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok', 0) }}" required>
        </div>

        <div class="form-group">
            <label>Status Tampil</label>
            <select name="status_tampil" class="form-control" required>
                <option value="aktif">Aktif</option>
                <option value="tidak_aktif">Tidak Aktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
