<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollectionController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ====HALAMAN USER===
//=====LANDING=======
Route::get('/', function () {
    return view('landing.welcome');
})->name('home');

Route::get('/collections', function () {
    return view('landing.collection');
})->name('collections');

Route::get('/categories', function () {
    return view('landing.category');
})->name('categories');

Route::get('/about', function () {
    return view('landing.about');
})->name('about');

Route::get('/contact', function () {
    return view('landing.contact');
})->name('contact');

// Route::post('/contact', function () {
//     return redirect()->route('landing/contact')->with('success', 'Pesan telah dikirim!');
// })->name('contact.submit');
//=====LANDING SELESAI=======

//======HALAMAN USER====
Route::middleware(['auth'])->group(function () {
//     Route::get('/collections', [CollectionController::class, 'index'])->name('collections');

//     Route::post('/collections/{book}/favorite', [CollectionController::class, 'addFavorite'])->name('collections.favorite');

//     Route::delete('/collections/{book}/unfavorite', [CollectionController::class, 'removeFavorite'])->name('collections.unfavorite');

//     Route::post('/collections/{book}/borrow', [CollectionController::class, 'borrow'])->name('collections.borrow');

//     Route::post('/collections/{book}/review', [CollectionController::class, 'addReview'])->name('collections.review');

    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//======HALAMAN USER SELESAI====



// ====HALAMAN ADMIN====
Route::middleware(['auth'])->group(function () {
    // Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    // Route::get('/collections', [CollectionController::class, 'index'])->name('collections');
    // Route::post('/collections/{book}/favorite', [CollectionController::class, 'addFavorite'])->name('collections.favorite.add');
    // Route::delete('/collections/{book}/favorite', [CollectionController::class, 'removeFavorite'])->name('collections.favorite.remove');
    // Route::post('/collections/{book}/borrow', [CollectionController::class, 'borrow'])->name('collections.borrow');
    // Route::post('/collections/{book}/review', [CollectionController::class, 'storeReview'])->name('collections.review');

    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/books', [AdminController::class, 'booksIndex'])->name('admin.books.index');
        Route::get('/books/create', [AdminController::class, 'createBook'])->name('admin.books.create');
        Route::post('/books', [AdminController::class, 'storeBook'])->name('admin.books.store');
        Route::get('/books/{book}/edit', [AdminController::class, 'editBook'])->name('admin.books.edit');
        Route::put('/books/{book}', [AdminController::class, 'updateBook'])->name('admin.books.update');
        Route::delete('/books/{book}', [AdminController::class, 'destroyBook'])->name('admin.books.destroy');
        Route::get('/categories', [AdminController::class, 'categoriesIndex'])->name('admin.categories.index');
        Route::post('/categories', [AdminController::class, 'storeCategory'])->name('admin.categories.store');
        Route::delete('/categories/{category}', [AdminController::class, 'destroyCategory'])->name('admin.categories.destroy');
        Route::get('/loans', [AdminController::class, 'loansIndex'])->name('admin.loans.index');
        Route::put('/loans/{loan}', [AdminController::class, 'updateLoan'])->name('admin.loans.update');
        Route::get('/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
        Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
        Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
        Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
        Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
        Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
    });
});


require __DIR__.'/auth.php';
