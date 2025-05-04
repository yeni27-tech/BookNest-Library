@extends('layouts.admin')

     @section('title', 'Dashboard')

     @section('content')
         <!-- Dashboard Cards -->
         <div class="dashboard-cards">
             <div class="card">
                 <div class="card-header">
                     <div class="card-title">Total Buku</div>
                     <div class="card-icon">
                         <i class="fas fa-book"></i>
                     </div>
                 </div>
                 <div class="card-value">{{ $totalBooks }}</div>
                 <div class="card-change">
                     <i class="fas fa-arrow-up"></i> 8.2% bulan ini
                 </div>
             </div>

             <div class="card">
                 <div class="card-header">
                     <div class="card-title">Total Anggota</div>
                     <div class="card-icon">
                         <i class="fas fa-users"></i>
                     </div>
                 </div>
                 <div class="card-value">{{ $totalUsers }}</div>
                 <div class="card-change">
                     <i class="fas fa-arrow-up"></i> 5.3% bulan ini
                 </div>
             </div>

             <div class="card">
                 <div class="card-header">
                     <div class="card-title">Peminjaman Aktif</div>
                     <div class="card-icon">
                         <i class="fas fa-exchange-alt"></i>
                     </div>
                 </div>
                 <div class="card-value">{{ $activeLoans }}</div>
                 <div class="card-change">
                     <i class="fas fa-arrow-down"></i> 2.1% bulan ini
                 </div>
             </div>

             <div class="card">
                 <div class="card-header">
                     <div class="card-title">Terlambat</div>
                     <div class="card-icon">
                         <i class="fas fa-clock"></i>
                     </div>
                 </div>
                 <div class="card-value">{{ $overdueLoans }}</div>
                 <div class="card-change down">
                     <i class="fas fa-arrow-up"></i> 12.4% bulan ini
                 </div>
             </div>
         </div>

         <!-- Charts -->
         <div class="charts">
             <div class="chart-container">
                 <div class="chart-header">
                     <div class="chart-title">Statistik Peminjaman</div>
                     <div class="chart-actions">
                         <button class="btn btn-outlined">Bulan</button>
                         <button class="btn">Mingguan</button>
                     </div>
                 </div>
                 <div class="chart-canvas">
                     <canvas id="loanChart"></canvas>
                 </div>
             </div>

             <div class="chart-container">
                 <div class="chart-header">
                     <div class="chart-title">Kategori Populer</div>
                     <div class="chart-actions">
                         <button class="btn btn-outlined">Semua</button>
                     </div>
                 </div>
                 <div class="chart-canvas">
                     <canvas id="categoryChart"></canvas>
                 </div>
             </div>
         </div>

         <!-- Recent Activity -->
         <div class="recent-activity">
             <div class="activity-header">
                 <div class="chart-title">Aktivitas Terkini</div>
                 <button class="btn btn-outlined">Lihat Semua</button>
             </div>
             <div class="activity-list">
                 @foreach ($recentActivities as $activity)
                     <div class="activity-item">
                         <div class="activity-icon">
                             <i class="{{ $activity['icon'] }}"></i>
                         </div>
                         <div class="activity-content">
                             <div class="activity-title">{{ $activity['title'] }}</div>
                             <div class="activity-time">{{ $activity['time'] }}</div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>

         <!-- Data Table -->
         <div class="data-tables">
             <div class="table-container">
                 <div class="table-header">
                     <div class="chart-title">Peminjaman Terbaru</div>
                     <div class="search-filter">
                         <div class="search-box">
                             <i class="fas fa-search search-icon"></i>
                             <input type="text" class="search-input" placeholder="Cari...">
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
                         @foreach ($recentLoans as $loan)
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
                                     <div class="action-buttons">
                                         <a href="{{ route('admin.loans.edit', $loan) }}" class="btn-action btn-edit">Edit</a>
                                     </div>
                                 </td>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     @endsection
