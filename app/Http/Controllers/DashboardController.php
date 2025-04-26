<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $favorites = $user->favorites()->with('category')->get();
        $loans = $user->loans()->with('book.category')->whereIn('status', ['borrowed', 'overdue'])->get();
        $reviews = $user->reviews()->with('book')->get();
        $libraryCard = $user->libraryCard;
        return view('user.dashboard', compact('user', 'favorites', 'loans', 'reviews', 'libraryCard'));
    }
}
