<?php

    namespace App\Http\Controllers;

    use App\Models\Book;
    use App\Models\Category;
    use App\Models\Loan;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

    class AdminController extends Controller
    {
        public function __construct()
        {
            $this->middleware(['auth', 'role:admin']);
        }

        public function index()
        {
            $books = Book::with('category')->paginate(10);
            $loans = Loan::with(['user', 'book'])->whereIn('status', ['borrowed', 'overdue'])->paginate(10);
            return view('admin.dashboard', compact('books', 'loans'));
        }

        public function createBook()
        {
            $categories = Category::all();
            return view('admin.books.create', compact('categories'));
        }

        public function storeBook(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'publisher' => 'required|string|max:255',
                'year' => 'required|integer|min:1900|max:' . date('Y'),
                'category_id' => 'required|exists:categories,id',
                'sinopsis' => 'required|string',
                'stok' => 'required|integer|min:0',
                'image' => 'nullable|image|max:2048',
            ]);

            $data = $request->all();
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('books', 'public');
            }

            Book::create($data);
            return redirect()->route('admin.dashboard')->with('success', 'Buku berhasil ditambahkan!');
        }

        public function editBook(Book $book)
        {
            $categories = Category::all();
            return view('admin.books.edit', compact('book', 'categories'));
        }

        public function updateBook(Request $request, Book $book)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'publisher' => 'required|string|max:255',
                'year' => 'required|integer|min:1900|max:' . date('Y'),
                'category_id' => 'required|exists:categories,id',
                'sinopsis' => 'required|string',
                'stok' => 'required|integer|min:0',
                'image' => 'nullable|image|max:2048',
            ]);

            $data = $request->all();
            if ($request->hasFile('image')) {
                if ($book->image) {
                    Storage::disk('public')->delete($book->image);
                }
                $data['image'] = $request->file('image')->store('books', 'public');
            }

            $book->update($data);
            return redirect()->route('admin.dashboard')->with('success', 'Buku berhasil diperbarui!');
        }

        public function destroyBook(Book $book)
        {
            if ($book->image) {
                Storage::disk('public')->delete($book->image);
            }
            $book->delete();
            return redirect()->route('admin.dashboard')->with('success', 'Buku berhasil dihapus!');
        }

        public function manageCategories()
        {
            $categories = Category::paginate(10);
            return view('admin.categories.index', compact('categories'));
        }

        public function storeCategory(Request $request)
        {
            $request->validate(['name' => 'required|string|max:255']);
            Category::create($request->all());
            return redirect()->route('admin.categories')->with('success', 'Kategori berhasil ditambahkan!');
        }

        public function destroyCategory(Category $category)
        {
            $category->delete();
            return redirect()->route('admin.categories')->with('success', 'Kategori berhasil dihapus!');
        }

        public function updateLoanStatus(Request $request, Loan $loan)
        {
            $request->validate(['status' => 'required|in:borrowed,returned,overdue']);
            $loan->update([
                'status' => $request->status,
                'return_date' => $request->status === 'returned' ? now() : null,
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'Status peminjaman diperbarui!');
        }
    }
