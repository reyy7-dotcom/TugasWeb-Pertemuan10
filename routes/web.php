<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// ── Requirement 4: 3 Route Custom ───────────────────────────
Route::get('/',        [PageController::class, 'home'])->name('home');
Route::get('/about',   [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// ── Bonus: Route Parameter ──────────────────────────────────
Route::get('/hello/{nama}', [PageController::class, 'hello'])->name('hello');
