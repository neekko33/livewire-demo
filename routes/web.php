<?php

use App\Livewire\Counter;
use App\Livewire\Todo;
use App\Livewire\ShowPost;
use Illuminate\Support\Facades\Route;

Route::get('/', Todo::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPost::class);
