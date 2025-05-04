@extends('layouts.admin')

  @section('title', 'Manajemen Buku')

  @section('content')
      <div class="mb-6">
          <a href="{{ route('admin.books.create') }}" class="btn">Tambah Buku</a>
      </div>

      <div class="table-container">
          <div class="table-header">
              <div class="chart-title">Daftar Buku</div>
              <div class="search-filter">
                  <div class="search-box">
                      <i class="fas fa-search search-icon"></i>
                      <input type="text" class="search-input" placeholder="Cari buku...">
                  </div>
              </div>
          </div>
          <table>
              <thead>
                  <tr>
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th>Kategori</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($books as $book)
                      <tr>
                          <td>{{ $book->judul }}</td>
                          <td>{{ $book->penulis }}</td>
                          <td>{{ $book->penerbit }}</td>
                          <td>{{ $book->category->name }}</td>
                          <td>{{ $book->stok }}</td>
                          <td>
                              <div class="action-buttons">
                                  <a href="{{ route('admin.books.edit', $book) }}" class="btn-action btn-edit">Edit</a>
                                  <form action="{{ route('admin.books.destroy', $book) }}" method="POST" class="inline">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                                  </form>
                              </div>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          {{ $books->links() }}
      </div>
  @endsection
