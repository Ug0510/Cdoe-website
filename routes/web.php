<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CDOEController;




// Home
Route::get('/', [CDOEController::class, 'home'])->name('home');
Route::get('/programme', [CDOEController::class, 'programme'])->name('programme');
Route::get('/blog', [CDOEController::class, 'blog'])->name('blog');
Route::get('/blog-details', [CDOEController::class, 'blog_details'])->name('blog.details');
