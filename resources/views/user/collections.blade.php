@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Book Collections</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row">
        @forelse($books as $book)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="{{ asset($book->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="{{ $book->title }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text text-muted">by {{ $book->author }} ({{ $book->year }})</p>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($book->sinopsis, 100) }}</p>
                    <p class="card-text">Stock: {{ $book->stok }}</p>

                    <form method="POST" action="{{ route('collections.borrow', $book) }}">
                        @csrf
                        <button class="btn btn-primary mb-2 w-100" {{ $book->stok <= 0 ? 'disabled' : '' }}>
                            Borrow
                        </button>
                    </form>

                    @php
                        $isFavorited = auth()->user()->favorites->contains($book->id);
                    @endphp

                    <form method="POST" action="{{ $isFavorited ? route('collections.unfavorite', $book) : route('collections.favorite', $book) }}">
                        @csrf
                        @if($isFavorited)
                            @method('DELETE')
                            <button class="btn btn-outline-danger w-100">Remove Favorite ❤️</button>
                        @else
                            <button class="btn btn-outline-success w-100">Add to Favorite 🤍</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        @empty
            <p>No books available.</p>
        @endforelse
    </div>
</div>
@endsection
