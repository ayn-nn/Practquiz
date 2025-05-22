<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('Students', [\App\Http\Controllers\records::class, 'index'])->name('students.index');
    Route::get('Students/create', [\App\Http\Controllers\records::class, 'create'])->name('students.create');
    Route::post('Students', [\App\Http\Controllers\records::class, 'store'])->name('students.store');
    Route::get('Students/{id}/edit', [\App\Http\Controllers\records::class, 'edit'])->name('students.edit');
    Route::put('Students/{id}/edit', [\App\Http\Controllers\records::class, 'update'])->name('students.update');
    Route::get('Students/{id}/delete', [\App\Http\Controllers\records::class, 'destroy'])->name('students.delete');



    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
