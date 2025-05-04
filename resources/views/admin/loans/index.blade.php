@extends('layouts.admin')

  @section('title', 'Manajemen Peminjaman')

  @section('content')
      <div class="table-container">
          <div class="table-header">
              <div class="chart-title">Daftar Peminjaman</div>
              <div class="search-filter">
                  <div class="search-box">
                      <i class="fas fa-search search-icon"></i>
                      <input type="text" class="search-input" placeholder="Cari peminjaman...">
                  </div>
                  <select class="filter-dropdown">
                      <option value="all">Semua Status</option>
                      <option value="active">Aktif</option>
                      <option value="pending">Menunggu</option>
                      <option value="returned">Dikembalikan</option>
                  </select>
              </div>
          </div>
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Anggota</th>
                      <th>Buku</th>
                      <th>Tanggal Pinjam</th>
                      <th>Batas Waktu</th>
                      <th>Status</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($loans as $loan)
                      <tr>
                          <td>#{{ $loan->id }}</td>
                          <td>{{ $loan->user->nama_lengkap }}</td>
                          <td>{{ $loan->book->judul }}</td>
                          <td>{{ $loan->loan_date->format('d M Y') }}</td>
                          <td>{{ $loan->due_date->format('d M Y') }}</td>
                          <td>
                              <span class="status {{ $loan->status === 'borrowed' ? 'active' : ($loan->status === 'returned' ? 'returned' : 'pending') }}">
                                  {{ ucfirst($loan->status) }}
                              </span>
                          </td>
                          <td>
                              <form action="{{ route('admin.loans.update', $loan) }}" method="POST" class="inline">
                                  @csrf
                                  @method('PUT')
                                  <select name="status" class="border rounded p-1">
                                      <option value="borrowed" {{ $loan->status === 'borrowed' ? 'selected' : '' }}>Borrowed</option>
                                      <option value="returned" {{ $loan->status === 'returned' ? 'selected' : '' }}>Returned</option>
                                      <option value="overdue" {{ $loan->status === 'overdue' ? 'selected' : '' }}>Overdue</option>
                                  </select>
                                  <button type="submit" class="btn-action btn-edit">Update</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          {{ $loans->links() }}
      </div>
  @endsection
