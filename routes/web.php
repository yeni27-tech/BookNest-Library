<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LibraryCardController;




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
    return view('landing/welcome');
})->name('home');

Route::get('/collections', function () {
    return view('landing/collection');
})->name('collections');

Route::get('/categories', function () {
    return view('landing/category');
})->name('categories');

Route::get('/about', function () {
    return view('landing/about');
})->name('about');

Route::get('/contact', function () {
    return view('landing/contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('landing/contact')->with('success', 'Pesan telah dikirim!');
})->name('contact.submit');
//=====LANDING SELESAI=======

//======HALAMAN USER====
Route::middleware(['auth'])->group(function () {
    Route::get('/collections', [CollectionController::class, 'index'])->name('collections');
    Route::post('/collections/{book}/favorite', [CollectionController::class, 'addFavorite'])->name('collections.favorite');
    Route::delete('/collections/{book}/unfavorite', [CollectionController::class, 'removeFavorite'])->name('collections.unfavorite');
    Route::post('/collections/{book}/borrow', [CollectionController::class, 'borrow'])->name('collections.borrow');
    Route::post('/collections/{book}/review', [CollectionController::class, 'addReview'])->name('collections.review');
    Route::get('/user.dashboard', function () {
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
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');
    Route::get('/books/create', [BookController::class, 'index'])->name('book.create');
    Route::get('/books/index', [BookController::class, 'index'])->name('books');
    Route::get('/books/edit', [BookController::class, 'index'])->name('books.edit');
});


require __DIR__.'/auth.php';
