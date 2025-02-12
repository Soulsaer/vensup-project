<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('admin/dashboard')->name('admin.dashboard');
// });

// Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    Route::get('dashboard' , function(){
        return view('admin.home.index');
    });

    Route::get('products', function(){
        return view('admin.product.index');
    });
// });

require __DIR__ . '/auth.php';
