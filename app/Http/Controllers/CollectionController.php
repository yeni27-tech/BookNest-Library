<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::with('category')->where('status_tampil', true)->paginate(12);
        $favorites = Auth::user()->favorites()->pluck('book_id')->toArray();
        return view('collections.index', compact('books', 'favorites'));
    }

    public function addFavorite(Book $book)
    {
        Auth::user()->favorites()->attach($book->id);
        return redirect()->route('collections')->with('success', 'Buku ditambahkan ke favorit!');
    }

    public function removeFavorite(Book $book)
    {
        Auth::user()->favorites()->detach($book->id);
        return redirect()->route('collections')->with('success', 'Buku dihapus dari favorit!');
    }

    public function borrow(Request $request, Book $book)
    {
        if ($book->stok <= 0) {
            return redirect()->route('collections')->with('error', 'Buku tidak tersedia!');
        }

        if (!Auth::user()->libraryCard || !Auth::user()->libraryCard->status) {
            return redirect()->route('collections')->with('error', 'Kartu perpustakaan tidak valid!');
        }

        Loan::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'loan_date' => now(),
            'due_date' => now()->addDays(7),
            'status' => 'available',
        ]);

        $book->decrement('stok');
        return redirect()->route('collections')->with('success', 'Buku berhasil dipinjam!');
    }

    public function storeReview(Request $request, Book $book)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'nullable|string|max:500',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'rating' => $request->rating,
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('collections')->with('success', 'Ulasan berhasil ditambahkan!');
    }
}
