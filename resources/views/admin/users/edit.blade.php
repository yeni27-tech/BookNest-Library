@extends('layouts.admin')

     @section('title', 'Edit Anggota')

     @section('content')
         <div class="form-container">
             <h2 class="text-2xl font-semibold mb-6">Edit Anggota</h2>
             <form action="{{ route('admin.users.update', $user) }}" method="POST">
                 @csrf
                 @method('PUT')
                 <div class="form-group">
                     <label for="nama_lengkap">Nama Lengkap</label>
                     <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap', $user->nama_lengkap) }}" class="@error('nama_lengkap') border-red-500 @enderror">
                     @error('nama_lengkap')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="@error('email') border-red-500 @enderror">
                     @error('email')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="password">Password (Kosongkan jika tidak diubah)</label>
                     <input type="password" name="password" id="password" class="@error('password') border-red-500 @enderror">
                     @error('password')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="password_confirmation">Konfirmasi Password</label>
                     <input type="password" name="password_confirmation" id="password_confirmation">
                 </div>
                 <div class="form-group">
                     <label for="phone">Telepon</label>
                     <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" class="@error('phone') border-red-500 @enderror">
                     @error('phone')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="address">Alamat</label>
                     <textarea name="address" id="address" rows="4" class="@error('address') border-red-500 @enderror">{{ old('address', $user->address) }}</textarea>
                     @error('address')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="identity_number">Nomor Identitas</label>
                     <input type="text" name="identity_number" id="identity_number" value="{{ old('identity_number', $user->identity_number) }}" class="@error('identity_number') border-red-500 @enderror">
                     @error('identity_number')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label for="institution">Institusi</label>
                     <input type="text" name="institution" id="institution" value="{{ old('institution', $user->institution) }}" class="@error('institution') border-red-500 @enderror">
                     @error('institution')
                         <div class="error-message">{{ $message }}</div>
                     @enderror
                 </div>
                 <button type="submit" class="btn">Simpan</button>
             </form>
         </div>
     @endsection
