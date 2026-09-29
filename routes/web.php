<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController2;
use Illuminate\Support\Facades\Route;

// route dari pertemuan 3
Route::get('/', function () {
    return view('index');
});

// Route::get('/books', function () {
//     return 'Daftar Buku';
// });

// Route::get('/books',
// [BookController::class, 'index']);

// route untuk controller baru
Route::resource('books', BookController2::class);
