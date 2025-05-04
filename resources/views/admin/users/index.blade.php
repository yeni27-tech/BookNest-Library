@extends('layouts.admin')

     @section('title', 'Manajemen Anggota')

     @section('content')
         <div class="mb-6">
             <a href="{{ route('admin.users.create') }}" class="btn">Tambah Anggota</a>
         </div>

         <div class="table-container">
             <div class="table-header">
                 <div class="chart-title">Daftar Anggota</div>
                 <div class="search-filter">
                     <div class="search-box">
                         <i class="fas fa-search search-icon"></i>
                         <input type="text" class="search-input" placeholder="Cari anggota...">
                     </div>
                 </div>
             </div>
             <table>
                 <thead>
                     <tr>
                         <th>Nama</th>
                         <th>Email</th>
                         <th>Telepon</th>
                         <th>Institusi</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($users as $user)
                         <tr>
                             <td>{{ $user->nama_lengkap }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ $user->phone ?? '-' }}</td>
                             <td>{{ $user->institution ?? '-' }}</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="{{ route('admin.users.edit', $user) }}" class="btn-action btn-edit">Edit</a>
                                     <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus anggota ini?')">Hapus</button>
                                     </form>
                                 </div>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
             {{ $users->links() }}
         </div>
     @endsection
