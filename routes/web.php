<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts\SinglePost;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        return view('app');
    })->name('home');

    Route::get('/posts/{post}', SinglePost::class)
        ->name('posts.single');
});
