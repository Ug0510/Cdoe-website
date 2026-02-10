<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CDOEController;




// Home
Route::get('/', [CDOEController::class, 'home'])->name('home');
Route::get('/programme', [CDOEController::class, 'programme'])->name('programme');
Route::get('/blog', [CDOEController::class, 'blog'])->name('blog');
Route::get('/blog-details', [CDOEController::class, 'blog_details'])->name('blog.details');
Route::get('/online-mba-hr', [CDOEController::class, 'hr_programme'])->name('hr.programme');
Route::get('/online-mba-finance', [CDOEController::class, 'finance_programme'])->name('finance.programme');
Route::get('/online-mba-international-business', [CDOEController::class, 'ib_programme'])->name('ib.programme');
Route::get('/online-mba-marketing', [CDOEController::class, 'marketing_programme'])->name('marketing.programme');
Route::get('/mandatory-disclosure', [CDOEController::class, 'mandatory_disclosure'])->name('mandatory.disclosure');
Route::get('/admissions-rules', [CDOEController::class, 'admissions_rules'])->name('admissions.rules');
Route::get('/how-to-apply', [CDOEController::class, 'how_to_apply'])->name('how.to.apply');
Route::get('/facilities', [CDOEController::class, 'facilities'])->name('facilities');
Route::get('/blog/{slug}', [CDOEController::class, 'showBlog'])->name('show.blog');
