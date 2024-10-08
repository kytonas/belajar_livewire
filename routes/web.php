<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware('auth') -> group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
    Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('users.show');
    Route::get('/users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('/about', \App\Livewire\About::class)->name('about');
});

Route::get('/login', \App\Livewire\Login::class)->name('login')->middleware('guest');
Route::post('/logout', \App\Http\Controllers\LogoutController::class)->name('logout');

