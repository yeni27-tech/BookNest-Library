<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        $totalBooks = Book::count();
        $totalUsers = User::where('role', 'user')->count();
        $activeLoans = Loan::where('status', 'borrowed')->count();
        $overdueLoans = Loan::where('status', 'overdue')->count();
        $recentLoans = Loan::with(['user', 'book'])->orderBy('created_at', 'desc')->take(5)->get();
        $recentActivities = collect([
            ['title' => 'Buku baru ditambahkan: "Laskar Pelangi"', 'time' => 'Baru saja', 'icon' => 'fas fa-book'],
            ['title' => 'Anggota baru: Budi Santoso', 'time' => '10 menit yang lalu', 'icon' => 'fas fa-user'],
            ['title' => 'Peminjaman buku: "Filosofi Teras"', 'time' => '25 menit yang lalu', 'icon' => 'fas fa-exchange-alt'],
        ]);

        return view('admin.dashboard', compact('totalBooks', 'totalUsers', 'activeLoans', 'overdueLoans', 'recentLoans', 'recentActivities'));
    }

    // Books CRUD
    public function booksIndex()
    {
        $books = Book::with('category')->paginate(10);
        return view('admin.books.index', compact('books'));
    }

    public function createBook()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function storeBook(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'category_id' => 'required|exists:categories,id',
            'stok' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('books', 'public');
        }

        Book::create($data);
        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function editBook(Book $book)
    {
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }

    public function updateBook(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'category_id' => 'required|exists:categories,id',
            'stok' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($book->image) {
                Storage::disk('public')->delete($book->image);
            }
            $data['image'] = $request->file('image')->store('books', 'public');
        }

        $book->update($data);
        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroyBook(Book $book)
    {
        if ($book->image) {
            Storage::disk('public')->delete($book->image);
        }
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil dihapus!');
    }

    // Categories CRUD
    public function categoriesIndex()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Category::create($request->all());
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function destroyCategory(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus!');
    }

    // Loans CRUD
    public function loansIndex()
    {
        $loans = Loan::with(['user', 'book'])->paginate(10);
        return view('admin.loans.index', compact('loans'));
    }

    public function updateLoan(Request $request, Loan $loan)
    {
        $request->validate(['status' => 'required|in:borrowed,returned,overdue']);
        $loan->update([
            'status' => $request->status,
            'return_date' => $request->status === 'returned' ? now() : null,
        ]);
        return redirect()->route('admin.loans.index')->with('success', 'Status peminjaman diperbarui!');
    }

    // Users CRUD
    public function usersIndex()
    {
        $users = User::where('role', 'user')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'identity_number' => 'nullable|string|max:20',
            'institution' => 'nullable|string|max:255',
        ]);

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => 'user',
            'identity_number' => $request->identity_number,
            'institution' => $request->institution,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'identity_number' => 'nullable|string|max:20',
            'institution' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['nama_lengkap', 'email', 'phone', 'address', 'identity_number', 'institution']);
        if ($request->password) {
            $request->validate(['password' => 'string|min:8|confirmed']);
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        return redirect()->route('admin.users.index')->with('success', 'Anggota berhasil diperbarui!');
    }

    public function destroyUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Anggota berhasil dihapus!');
    }
}
