<?php

use App\Livewire\Counter;
use App\Livewire\Todo;
use App\Livewire\ShowPost;
use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', Todo::class);
Route::get('/counter', Counter::class);
Route::get('/posts/create', CreatePost::class);
Route::get('/posts', ShowPost::class);
