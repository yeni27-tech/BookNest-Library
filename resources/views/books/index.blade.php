@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Buku</h1>

    <a href="{{ route('/admin/booksCreate') }}" class="btn btn-primary mb-3">+ Tambah Buku</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->kategori }}</td>
                <td>{{ $book->stok }}</td>
                <td>{{ ucfirst($book->status_tampil) }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id_books) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('books.destroy', $book->id_books) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="8" class="text-center">Tidak ada buku.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
