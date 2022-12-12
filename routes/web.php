<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts\SinglePost;

Route::get('/', function () {
    return view('app');
});
Route::get('/posts/{post}', SinglePost::class)->name('posts.single');
