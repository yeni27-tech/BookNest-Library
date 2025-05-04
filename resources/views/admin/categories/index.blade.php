@extends('layouts.admin')

  @section('title', 'Manajemen Kategori')

  @section('content')
      <div class="form-container mb-6">
          <h2 class="text-2xl font-semibold mb-6">Tambah Kategori</h2>
          <form action="{{ route('admin.categories.store') }}" method="POST">
              @csrf
              <div class="form-group">
                  <label for="name">Nama Kategori</label>
                  <input type="text" name="name" id="name" value="{{ old('name') }}" class="@error('name') border-red-500 @enderror">
                  @error('name')
                      <div class="error-message">{{ $message }}</div>
                  @enderror
              </div>
              <button type="submit" class="btn">Simpan</button>
          </form>
      </div>

      <div class="table-container">
          <div class="table-header">
              <div class="chart-title">Daftar Kategori</div>
          </div>
          <table>
              <thead>
                  <tr>
                      <th>Nama</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                      <tr>
                          <td>{{ $category->name }}</td>
                          <td>
                              <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          {{ $categories->links() }}
      </div>
  @endsection
